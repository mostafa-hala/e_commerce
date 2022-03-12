<?php

namespace App\Http\Controllers\ADMIN;

use App\Models\Cate;
use App\Models\Prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cates = Cate::all();
        return view("admin.cates.all", compact("cates"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.cates.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'desc' => ['required'],
            'image' => ['mimes:png,jpg'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(($request->all()));
        }
        if ($Image = $request->file('image')) {
            $PostImage = time() . "_" . $Image->getClientOriginalName();
            $Image->move('img', $PostImage);
        }else{
            $PostImage = new Cate();
            $PostImage = NULL;
        }
        // $Image = $request->file('image');
        // $PostImage = time() . "_" . $Image->getClientOriginalName();
        // $Image->move('img', $PostImage);
        Cate::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $PostImage,


            // 'title'=>$request->title,
            // 'content'=>$request->content


        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cates_prod = Cate::findOrFail($id)->prods;
        return view("admin.cates.show", compact("cates_prod"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cate = Cate::findOrFail($id);
        return view('admin.cates.edit', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $cate = Cate::findOrFail($id);
        $cate->update([
            'title' => $request->title,
            'desc' => $request->desc,

        ]);
        return redirect('/admin/cates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cate = Cate::findOrFail($id);
        $cate->delete();
        return redirect()->back();
    }
}
