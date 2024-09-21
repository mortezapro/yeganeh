<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Models\PostModel;
use App\Services\Post\PostServiceInterface;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Tests\Models\Post;

class PostController extends Controller
{
    protected mixed $postService;
    protected mixed $categoryService;
    public function __construct()
    {
        $this->postService = App::make(PostServiceInterface::class);
        $this->categoryService = App::make(CategoryServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->postService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.post.buttons')->with("row",$row);
                })
                ->addColumn('category', function ($row) {
                    return view('panel.post.categories')->with("row",$row);
                })
                ->addColumn('username', function ($row) {
                    return $row->user->name;
                })
                ->addIndexColumn()
                ->rawColumns(['thumbnail','action','category'])
                ->make(true);
        }
        return view("panel.post.index");
    }

    public function create()
    {
        $categories = $this->categoryService->all();
        return view("panel.post.create",compact("categories"));
    }
    public function edit(PostModel $post)
    {
        $categories = $this->categoryService->all();
        return view("panel.post.edit",compact("categories","post"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:posts,slug",
            "content" => "required",
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
            "content.required" => "محتوای پست اجباری است",
        ]);
        $postData = $request->except("_token");
        $postData["user_id"] = Auth::id();

        if($request->file("thumbnail")){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"thumbnail",config("upload_image_path.post-thumbnail"));
            $postData["thumbnail"] = $thumbnailName;
        }

        if(array_key_exists("seo_image",$postData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $postData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$postData)){
            $postData["indexable"] = 0;
        }

        $post = $this->postService->store($postData);

        if(array_key_exists("category",$postData)){
            $this->categoryService->syncCategory($post,$postData["category"]);
        } else {
            $this->categoryService->detachCategory($post);
        }
        if($post){
            return redirect()->route('panel.posts.index')->with('save',true);
        }
        return abort(500);
    }

    public function update(Request $request,PostModel $post)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:posts,slug,". $post->id,
            "content" => "required",
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
            "content.required" => "محتوای پست اجباری است",
        ]);
        $postData = $request->except("_token","category");
        $postData["user_id"] = Auth::id();
        if($request->file("thumbnail")){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"thumbnail",config("upload_image_path.post-thumbnail"));
            $postData["thumbnail"] = $thumbnailName;
        }

        if(array_key_exists("seo_image",$postData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $postData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$postData)){
            $postData["indexable"] = 0;
        }
        $this->postService->store($postData,["id" => $post->id]);
        $postData = $request->all();
        if(array_key_exists("category",$postData)){
            $this->categoryService->syncCategory($post,$postData["category"]);
        } else {
            $this->categoryService->detachCategory($post);
        }
        return redirect()->route('panel.posts.index')->with('save',true);
    }

    public function destroy(PostModel $post)
    {
        $image = new Images();
        if($post->thumbnail != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.post-thumbnail"),$post->thumbnail);
        }
        if($post->seo_image != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.seo-image"),$post->seo_image);
        }
        if( $this->postService->destroy(["id"=> $post->id]) ){
            return redirect()->route("panel.posts.index")->with("delete",true);
        }
    }
}
