<?php

namespace App\Http\Controllers\ADMIN;

use App\Models\Prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Cate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prods = Prod::all();
        return view("admin.prods.all", compact("prods"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cates = Cate::all();
        return view("admin.prods.create", compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
        $Image = $request->file('image');
        $PostImage = time() . "_" . $Image->getClientOriginalName();
        $Image->move('img', $PostImage);
        Prod::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'cate_id' => $request->cate_id,
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
        $prod = Prod::findOrFail($id);
        return view('admin.prods.show', compact('prod'));
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
        $prod = Prod::findOrFail($id);
        return view('admin.prods.edit', compact('prod'));
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
        $prod = Prod::findOrFail($id);
        $prod->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,

        ]);
        return redirect('/admin/prods');
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
        $prod = Prod::findOrFail($id);
        $prod->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Prod::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }

    // public function search()
    // {
    //     return view('search');
    // }
    // public function autocomplete(Request $request)
    // {
    //     $dates = Prod::select("name")
    //         ->where("%($request->terms)%", "LIKE", "name")
    //         ->get();
    //     return response()->json($dates);
    // }
}
