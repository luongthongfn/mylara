<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadTest extends Controller
{
    public function getUpload()
    {
        return view('test.upload');
    }
    public function postUpload(Request $request)
    {
        // $file = $request->file('test_file');
        // $file_arr2 = $request->file('test_file2');
        // dump($file);
        // dump($file_arr2);
        $name = $request->test_file->getClientOriginalName();
        $path = $request->test_file->storeAs('images', $name);
        dump($path);
        dd($request);
    }
}
