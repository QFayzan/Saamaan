<?php

namespace App\Http\Controllers;

use App\Driver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('Users',compact('users'));
        //return response()->json([$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("Drivers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     * @param \App\User $id
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

//        return response()->json($user);
        return view('users.show',compact('user'));
    }


    public function store(Request $request)
    {
       $data = $this->validate($request,[
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required"
        ]);
        User::create($data);
        return redirect('/users');
    }

    public function edit(User $user)
    {

        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $this->validate($request,[
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required"
        ]);
       $user->update($data);
       return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user');
   }

   
}
