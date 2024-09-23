<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\ScanMessage\ScanMessageServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class ScanMessageController extends Controller
{
    protected mixed $scanMessageService;
    public function __construct()
    {
        $this->scanMessageService = App::make(ScanMessageServiceInterface::class);
    }

    public function store(Request $request)
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
        $scanMessageData = $request->except(["_token","status","admin_comment"]);
        $scanMessageData["tracking_code"] = Str::random(2).substr(time(),4,6);
        $scanMessage = $this->scanMessageService->store($scanMessageData);
        if ($scanMessage) {
            return $scanMessageData["tracking_code"];
        }
        return abort(500);
    }
}
