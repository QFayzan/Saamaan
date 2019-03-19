<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order_Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only([
            'admin', 'adminshow', 'adminedit', 'adminupdate',
        ]);
        $this->middleware('auth');
    }

    /**
     * Admin Page is being controlled from here
     */
    public function admin()
    {
        $drivers = Driver::unVerified()->get();

        return view('admin.admin', compact('drivers'));
    }

    public function index()
    {
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin');
        }

        $categories = Order_Category::all();

        return view('users.home', compact('categories'));
    }

    public function create()
    {
        return view('/Users/create');
    }

    public function show()
    {
        return view('users.display');
    }

    public function adminshow()
    {
        return view('users.admindisplay');
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

    public function adminedit(User $user)
    {
        return view('users.adminedit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $this->validate($request, [
            "name"         => "required|string",
            "address"      => "required|string",
            "city"         => "required|string",
            'phone_number' => ['required', 'string', 'regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
        ]);
        $user->update($data);
        flash('details updated');

        return redirect()->route('user.show');
    }

    public function adminupdate(Request $request, User $user)
    {
        $data = $this->validate($request, [
            "name"         => "required|string",
            "address"      => "required|string",
            "city"         => "required|string",
            'phone_number' => ['required', 'string', 'regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
        ]);
        $user->update($data);
        flash('details updated');

        return redirect()->route('user.adminshow');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/user');
    }

    public function password()
    {
        return view('users.password');
    }

    public function changePassword(User $user)
    {
        $credentials = [
            'email'    => $user->email,
            'password' => request('password'),
        ];

        if (Auth::attempt($credentials)) {
            request()->validate([
                'newPassword' => 'required|confirmed|string|min:6',
            ]);
            $user->password = Hash::make(request('newPassword'));
            $user->save();

            return redirect()->route('user.show');
        }

        return back()->withErrors([
            'password' => 'Invalid Password',
        ]);
    }
}
