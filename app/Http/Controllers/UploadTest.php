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

        $file = $request->file('test_file');
        // $file_arr2 = $request->file('test_file2');
        // dump($file);
        // dump($file_arr2);
        $name = $file->getClientOriginalName();

        $path = $file->storeAs('public/1images', $name);
        // $path = $file->move('1images', $name);

        // dump($path);
        // dd($request);
        return view('test.viewfile', compact('path'));
    }
}
