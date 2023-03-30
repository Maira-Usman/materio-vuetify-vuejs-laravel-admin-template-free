<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(['id','name','email','is_admin','gender','address','city','state','country','zip','vat','phone','mobile','actions']);
        return response()->json(['data' => $users],200);
        $users = User::paginate(2);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'is_admin' => $request->input('is_admin'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'zip' => $request->input('zip'),
            'vat' => $request->input('vat'),
            'phone' => $request->input('phone'),
            'mobile' => $request->input('mobile'),
            'actions' => $request->input('actions'),
            'email_verified_at' => $request->input('email_vertified_at'),
            'password' => $request->input('password'),
        ]);
        $user->save();
        return response()->json('user created!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);



    }
    public function showuser(){
        $u = User::get();
        dd($u);
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
        $user = User::find($id);
        $user->update($request->all());
        return response()->json('user updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('User deleted!');

       
    }
}
