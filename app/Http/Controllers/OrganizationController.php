<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
         try {
             $organizations = Organization::all();
            return view('organizations.index',compact('organizations'));
          } catch(\Exception $exception) {
             return $exception->getMessage();
         }
    }

    public function create()
    {
        return view('organizations.create');
    }

    public function store(Request $request)
    {
         try {
            Organization::create($request->validate([
                'name' => 'required',
                'address' => 'required',
                'contact' => 'required',
                'registration' => 'required',
            ]));
            flash('created successfully');
            return back();
          } catch(\Exception $exception) {
             return $exception->getMessage();
         }
    }

    public function show(Organization $organization)
    {
        //
    }

    public function edit(Organization $organization)
    {
        return view('organizations.edit',compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        try {
            $organization->update($request->validate([
                'name'         => 'required',
                'address'      => 'required',
                'contact'      => 'required',
                'registration' => 'required',
            ]));
            flash('updated successfully');

            return back();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy(Organization $organization)
    {
        //
    }
}
