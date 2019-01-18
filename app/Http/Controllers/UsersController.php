<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller {
    
    /**
     * Admin Page is being controlled from here
     */
    public function admin()
    {
        return view('admin.admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->Type == 'Admin')
            return redirect()->route('admin');
        
        return view('users.show');
        
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('/Users/create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     * @param \App\User  $id
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('users.display');
    }
    
    
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "name"     => "required|string",
            "email"    => "required|email",
            "password" => "required",
        ]);
        User::create($data);
        
        return redirect('/users');
    }
    
    public function edit(User $user)
    {
        
        return view('users.edit', compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User                $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $this->validate($request, [
            "name"     => "required|string",
            "address"     => "required|string",
            "city"     => "required|string",
            'Phone_Number' => ['required', 'string', 'regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
        ]);
        $user->update($data);
        return back();
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
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
