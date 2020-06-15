<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\Products;
use App\models\Categories;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Products::join('categories', 'products.cate_id', '=', 'categories.id')->select('products.*','categories.name as cate_name')->get()->all();
        return view('admin.product.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Categories::select('id', 'name', 'order', 'parent_id')->get()->toArray();
        return view('admin.product.add', compact('data'));
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
            'num_price' => 'required',
            'file_image' => 'required|file',
        ]);

        if ($validator->fails()) {
            $notify = [
                'lv' => 'danger',
                'msg' => $validator->errors()->all(),
            ];

            return redirect()
                ->back()
                ->with(['notify' => $notify])
                ->withInput();
        }

        dd($request);

        // Products::create([
        //     'name' => $request->txt_name,
        //     'alias' => str_slug($request->txt_name),
        //     'price' => $request->num_price,
        //     'image' => $request->file_image,
        //     'slide' => $request->file_slide,
        //     'cate_id' => $request->slt_cate_id,
        //     'intro' => $request->txt_intro,
        //     'content' => $request->txt_content,
        //     'keywords' => $request->txt_keywords,
        //     'description' => $request->txt_description,
        //     // 'created_at' => now(),
        // ]);
        $notify = [
            'lv' => 'success',
            'msg' => ['Add success !'],
        ];
        return redirect()
            ->back()
            ->with(['notify' => $notify]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
