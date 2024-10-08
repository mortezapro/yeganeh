<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Models\TagModel;
use App\Services\Tag\TagServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TagController extends Controller
{
    protected mixed $tagService;
    public function __construct()
    {
        $this->tagService = App::make(TagServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->tagService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.tag.buttons')->with("row",$row);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view("panel.tag.index");
    }

    public function create()
    {
        $tags = $this->tagService->all();
        return view("panel.tag.create",compact("tags"));
    }
    public function edit(TagModel $tag)
    {
        return view("panel.tag.edit",compact("tag"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:tags,slug",
        ], [
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
        ]);
        $tagData = $request->except("_token");

        if (array_key_exists("seo_image", $tagData)) {
            $image = new Images();
            $thumbnailName = $image->uploadFile($request, "seo_image", config("upload_image_path.seo-image"));
            $tagData["seo_image"] = $thumbnailName;
        }
        if (!array_key_exists("indexable", $tagData)) {
            $tagData["indexable"] = 0;
        }

        $tag = $this->tagService->store($tagData);

        if ($tag) {
            return redirect()->route('panel.tags.index')->with('save', true);
        }
        return abort(500);
    }
    public function update(Request $request,TagModel $tag)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:tags,slug,". $tag->id,
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
        ]);
        $tagData = $request->except("_token","tag");

        if(array_key_exists("seo_image",$tagData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $tagData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$tagData)){
            $tagData["indexable"] = 0;
        }
        $this->tagService->store($tagData,["id" => $tag->id]);
        $tagData = $request->all();
        return redirect()->route('panel.tags.index')->with('save',true);
    }
    public function destroy(TagModel $tag)
    {
        $image = new Images();
        if($tag->seo_image != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.seo-image"),$tag->seo_image);
        }
        if( $this->tagService->destroy(["id"=> $tag->id]) ){
            return redirect()->route("panel.tags.index")->with("delete",true);
        }
    }
}
