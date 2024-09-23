<?php

namespace App\Http\Controllers\Panel;

use App\Helpers\Images;
use App\Http\Controllers\Controller;
use App\Models\ScanMessageModel;
use App\Services\Contact\ContactServiceInterface;
use App\Services\ScanMessage\ScanMessageServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ScanMessageController extends Controller
{
    protected mixed $scanMessageService;
    public function __construct()
    {
        $this->scanMessageService = App::make(ScanMessageServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->scanMessageService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.scan-message.buttons')->with("row",$row);
                })
                ->addColumn('captionStatus', function ($row) {
                    return view('panel.scan-message.status')->with("row",$row);
                })
                ->addIndexColumn()
                ->rawColumns(['thumbnail','action','category'])
                ->make(true);
        }
        return view("panel.scan-message.index");
    }
    public function create()
    {
        return view("panel.scan-message.create");
    }
    public function edit(ScanMessageModel $scanMessage)
    {
        return view("panel.scan-message.edit",compact("scanMessage"));
    }


    public function update(Request $request,ScanMessageModel $scanMessage)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "content" => "required",
        ], [
            "name.required" => "وارد کردن نام و نام خانوادگی اجباری است",
            "email.required" => "وارد کردن ایمیل اجباری است",
            "content.required" => "وارد کردن متن پیام اجباری است",
        ]);
        $scanMessageData = $request->except("_token");
        $scanMessage = $this->scanMessageService->store($scanMessageData,["id" => $scanMessage->id]);
        if ($scanMessage) {
            return redirect()->route('panel.scanMessages.index')->with('save', true);
        }
        return abort(500);
    }
    public function destroy(ScanMessageModel $scanMessage)
    {
        if( $this->scanMessageService->destroy(["id"=> $scanMessage->id]) ){
            return redirect()->route("panel.scanMessages.index")->with("delete",true);
        }
    }

    public function changeStatus(Request $request,ScanMessageModel $scanMessage)
    {
        $status = $request->input("status");
        $scanMessage->status = $status;
        $scanMessage->save();
        return redirect()->route("panel.scanMessages.edit",["scanMessage" => $scanMessage->tracking_code])->with("success",true);
    }

    public function setComment(Request $request,ScanMessageModel $scanMessage)
    {
        $adminComment = $request->input("admin_comment");
        $scanMessage->admin_comment = $adminComment;
        $scanMessage->save();
        return redirect()->route("panel.scanMessages.edit",["scanMessage" => $scanMessage->tracking_code])->with("success",true);
    }
}
