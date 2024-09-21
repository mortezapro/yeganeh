<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move('ckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('ckeditor/' . $fileName);
            $msg = 'فایل با موفقیت بارگذاری شد.';
            return response()->json([
                "uploaded"=> 1,
                "fileName"=> $fileName,
                "url"=> $url
            ]);
        }
    }
}
