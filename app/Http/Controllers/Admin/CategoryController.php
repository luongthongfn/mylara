<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::select('id', 'name', 'order', 'parent_id')->get()->toArray();
        $data1 = [];
        foreach ($data as $item => $arr) {
            echo $arr['parent_id'];
            $new_item = $arr['parent_id'] != 0 ?  array('parent_name' => Categories::where('id', '=', $arr['parent_id'])->first()->toArray()['name'] )   : [];
            $arr = array_merge($arr, $new_item);
            $data1 []= $arr;

        }
        $data = $data1;
        return view('admin/category/list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'txt_name' => 'required|unique:categories,name|max:255',
        ]);

        if ($validator->fails()) {
            $notify = [
                'lv' => 'danger',
                'msg' => $validator->errors()->all(),
            ];

            return redirect()
                ->to(url()->previous() . '#tab_content2')
                ->with(['notify' => $notify])
                ->withInput();
        }

        Categories::create([
            'name' => $request->txt_name,
            'alias' => str_slug($request->txt_name),
            'order' => $request->num_order ?? 0,
            'parent_id' => $request->slt_parent_id,
            'keywords' => $request->txt_keywords,
            'description' => $request->txt_description,
            // 'created_at' => now(),
        ]);
        $notify = [
            'lv' => 'success',
            'msg' => ['Add success !'],
        ];
        return redirect()
            ->to(url()->previous() . '#tab_content2')
            ->with(['notify' => $notify]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $Categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $Categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $Categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $Categories)
    {
        //
    }
}
