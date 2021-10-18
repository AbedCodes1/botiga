<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
        $categories = Category::all();
        return view('category.index',[
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required',
            'cat_image' => 'required|file|mimes:jpg,jpeg,png,gif',
        ]);

        $category = new category;
        $category->name = $request->cat_name;

        $category->slug = strtolower(str_replace(" ","-",$request->cat_name));

        if($request->hasFile('cat_image')){
            $mainImage=$request->file('cat_image');

            /* Just renaming the image */
            $file=$request->file('cat_image')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME); // get Image Name
            $extension = pathinfo($file, PATHINFO_EXTENSION); // get Image Extension
            $image=$filename.'-'.date('d-m-Y-H-i').'.'.$extension; // Merge Image name, date and extension


            
            $destinationPath = public_path() . '/images/category';
            $mainImage->move($destinationPath, $image);
            $category->image=$image;
          };
          $category->save();
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
    }
}
