<?php

namespace App\Http\Controllers\Admin;

use App\models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::all();
        // dd($data);
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
        //
        // $data = $request->all();
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255',
        ]);




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
