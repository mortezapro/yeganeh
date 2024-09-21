<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Services\Category\CategoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    protected mixed $categoryService;
    public function __construct()
    {
        $this->categoryService = App::make(CategoryServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->categoryService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.category.buttons')->with("row",$row);
                })
                ->addColumn('category', function ($row) {
                    return view('panel.category.categories')->with("row",$row);
                })
                ->addIndexColumn()
                ->rawColumns(['thumbnail','action','category'])
                ->make(true);
        }
        return view("panel.category.index");
    }

    public function create()
    {
        $categories = $this->categoryService->all();
        return view("panel.category.create",compact("categories"));
    }
    public function edit(CategoryModel $category)
    {
        $categories = $this->categoryService->all();
        return view("panel.category.edit",compact("categories","category"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:categories,slug",
        ], [
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
        ]);
        $categoryData = $request->except("_token");

        if ($request->file("thumbnail")) {
            $image = new Images();
            $thumbnailName = $image->uploadFile($request, "thumbnail", config("upload_image_path.category-thumbnail"));
            $categoryData["thumbnail"] = $thumbnailName;
        }

        if (array_key_exists("seo_image", $categoryData)) {
            $image = new Images();
            $thumbnailName = $image->uploadFile($request, "seo_image", config("upload_image_path.seo-image"));
            $categoryData["seo_image"] = $thumbnailName;
        }
        if (!array_key_exists("indexable", $categoryData)) {
            $categoryData["indexable"] = 0;
        }

        $category = $this->categoryService->store($categoryData);

        if (array_key_exists("category", $categoryData)) {
            $this->categoryService->syncCategory($category, $categoryData["category"]);
        } else {
            $this->categoryService->detachCategory($category);
        }
        if ($category) {
            return redirect()->route('panel.categories.index')->with('save', true);
        }
        return abort(500);
    }
    public function update(Request $request,CategoryModel $category)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:categories,slug,". $category->id,
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
        ]);
        $categoryData = $request->except("_token","category");
        if($request->file("thumbnail")){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"thumbnail",config("upload_image_path.category-thumbnail"));
            $categoryData["thumbnail"] = $thumbnailName;
        }

        if(array_key_exists("seo_image",$categoryData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $categoryData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$categoryData)){
            $categoryData["indexable"] = 0;
        }
        $this->categoryService->store($categoryData,["id" => $category->id]);
        $categoryData = $request->all();
        if(array_key_exists("category",$categoryData)){
            $this->categoryService->syncCategory($category,$categoryData["category"]);
        } else {
            $this->categoryService->detachCategory($category);
        }
        return redirect()->route('panel.categories.index')->with('save',true);
    }
    public function destroy(CategoryModel $category)
    {
        $image = new Images();
        if($category->thumbnail != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.category-thumbnail"),$category->thumbnail);
        }
        if($category->seo_image != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.seo-image"),$category->seo_image);
        }
        if( $this->categoryService->destroy(["id"=> $category->id]) ){
            return redirect()->route("panel.categories.index")->with("delete",true);
        }
    }
}
