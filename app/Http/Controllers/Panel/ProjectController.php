<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Services\Project\ProjectServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProjectController extends Controller
{
    protected mixed $projectService;
    public function __construct()
    {
        $this->projectService = App::make(ProjectServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->projectService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.project.buttons')->with("row",$row);
                })
                ->addIndexColumn()
                ->rawColumns(['thumbnail','action'])
                ->make(true);
        }
        return view("panel.project.index");
    }

    public function create()
    {
        return view("panel.project.create");
    }
    public function edit(ProjectModel $project)
    {
        $categories = $this->projectService->all();
        return view("panel.project.edit",compact("project"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:projects,slug",
            "content" => "required",
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
            "content.required" => "محتوای پروژه اجباری است",
        ]);
        $projectData = $request->except("_token");

        if($request->file("thumbnail")){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"thumbnail",config("upload_image_path.project-thumbnail"));
            $projectData["thumbnail"] = $thumbnailName;
        }

        if(array_key_exists("seo_image",$projectData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $projectData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$projectData)){
            $projectData["indexable"] = 0;
        }

        $project = $this->projectService->store($projectData);

        if($project){
            return redirect()->route('panel.projects.index')->with('save',true);
        }
        return abort(500);
    }

    public function update(Request $request,ProjectModel $project)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:projects,slug,". $project->id,
            "content" => "required",
        ],[
            "title.required" => "وارد کردن عنوان اجباری است",
            "slug.required" => "وارد کردن slug اجباری است",
            "slug.unique" => "فیلد slug تکراری است",
            "content.required" => "محتوای پروژه اجباری است",
        ]);
        $projectData = $request->except("_token","category");
        if($request->file("thumbnail")){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"thumbnail",config("upload_image_path.project-thumbnail"));
            $projectData["thumbnail"] = $thumbnailName;
        }

        if(array_key_exists("seo_image",$projectData)){
            $image = new Images();
            $thumbnailName = $image->uploadFile($request,"seo_image",config("upload_image_path.seo-image"));
            $projectData["seo_image"] = $thumbnailName;
        }
        if(!array_key_exists("indexable",$projectData)){
            $projectData["indexable"] = 0;
        }
        $this->projectService->store($projectData,["id" => $project->id]);
        return redirect()->route('panel.projects.index')->with('save',true);
    }

    public function destroy(ProjectModel $project)
    {
        $image = new Images();
        if($project->thumbnail != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.project-thumbnail"),$project->thumbnail);
        }
        if($project->seo_image != "thumbnail.png"){
            $image->deleteFile(config("upload_image_path.seo-image"),$project->seo_image);
        }
        if( $this->projectService->destroy(["id"=> $project->id]) ){
            return redirect()->route("panel.projects.index")->with("delete",true);
        }
    }
}
