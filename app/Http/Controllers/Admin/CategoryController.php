<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = "
            SELECT `cate`.*, `cate_p`.`name` AS `parent_name`
            FROM
                `categories` AS `cate`
                LEFT JOIN `categories` as `cate_p`
                    ON `cate`.`parent_id` = `cate_p`.`id`";

        $data = DB::select($sql);

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
        $data = Categories::select('id', 'name', 'order', 'parent_id')->get()->toArray();
        return view('admin/category/add', compact('data'));
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
                ->back()
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
            ->back()
            ->with(['notify' => $notify]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $Categories, $id)
    {
        return "show method";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $Categories, $id)
    {
        // $data = $Categories->find($id)->get()->map(function ($item) {
        //     return (object) $item->toArray();
        // })->all();
        $data = $Categories->select('id', 'name', 'parent_id')->get()->toArray();
        $item = $Categories->find($id);
        // dd($item);

        return view('admin/category/edit', compact('data', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $Categories, $id)
    {
        $validator = Validator::make($request->all(), [
            'txt_name' => 'required|max:255|unique:categories,name,'.$id,
            'slt_parent_id' => 'different:categories:id',
        ],[
            'slt_parent_id.different' => 'Cant choose it self as parent category !'
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

        $Categories->find($id)->update([
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
            'msg' => ['edit success asd !'],

        ];
        return redirect()
            ->back()
            ->with(['notify' => $notify]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $Categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $Categories, $id)
    {
        $data = $Categories->where('parent_id', '=', $id)->count();
        // dd($data);
        if ($data > 0) {
            $notify = [
                'lv' => 'danger',
                'msg' => ["Cant delete, this Category has $data child !"]
            ];
            return redirect()->back()->with(['notify' => $notify]);
        }
        $Categories->destroy($id);
        $notify = [
            'lv' => 'success',
            'msg' => ['Delete success !'],
        ];
        return redirect()->back()->with(['notify' => $notify]);
    }
}
