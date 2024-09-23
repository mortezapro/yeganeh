<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\MessageModel;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    protected mixed $contactService;
    public function __construct()
    {
        $this->contactService = App::make(ContactServiceInterface::class);
    }

    public function index()
    {
        if(request()->ajax()){
            return datatables()->of($this->contactService->all())
                ->editColumn('created_at', function ($data) {
                    return \Morilog\Jalali\Jalalian::forge($data->created_at)->format('%Y/%m/%d');
                })
                ->addColumn('action', function ($row) {
                    return view('panel.contact.buttons')->with("row",$row);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view("panel.contact.index");
    }

    public function destroy(MessageModel $message)
    {
        if($this->contactService->destroy(["id" => $message->id])){
            return redirect()->route("panel.contacts.index")->with("success",true);
        }
    }
}
