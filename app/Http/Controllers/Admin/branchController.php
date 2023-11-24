<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brachModel;
use App\Models\User;


class branchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("branch");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_branch(request $request)
    {
        dd($request->all());
         // Access form input data using the $request object

         $branch = new brachModel();
         $branch->name = $request->name;
         $branch->location = $request->location;
         $branch->manager_name = $request->manager_name;
         
         // You can also use the validate method to validate the input
         $request->validate([
             'name' => 'required|string|max:50',
             'location' => 'required|max:100',
             'manager_name'=>'required|max:50'
             // Add validation rules for other fields
         ]);

         $branch->save();
 
         // Process the form data or perform other actions
 
         //return view('branch', compact('name', 'email'));
     
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
