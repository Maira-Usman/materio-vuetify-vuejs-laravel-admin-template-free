<?php

namespace App\Http\Controllers;

use App\Models;
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
        
        $categories = Category::paginate(5);
        //return array_reverse($categories);      

       
    }
    public function indexes()
    {
        return view('users')
         
    }
    public function list()
    {
        return response()->json([
            'users' => \App\Models\User::latest()->get()
        ], Response::HTTP_OK);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'quantity' => $request->input('quantity'),
            'action' => $request->input('action')



        ]);
        $category->save();
        return response()->json('Category created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $category = Category::find($id);
        return response()->json($category);
                                         
        
        
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
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json('Category updated!');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json('Product deleted!');

       
    }
}
