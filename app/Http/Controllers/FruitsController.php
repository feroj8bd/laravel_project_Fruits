<?php

namespace App\Http\Controllers;

use App\Models\fruits;
use Illuminate\Http\Request;

class FruitsController extends Controller
{

    // index function
    public function index(){
        // return view('Fruits.index');
        $fruits =fruits::all();
        return view('fruits.index', compact('fruits'));
    }

    //create function
    public function create(){
        // return 'hi';
        return view('fruits.create');
    }

    // store function
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'fruits_name' => 'required|string|max:60',
            'fruits_type' => 'nullable|string|max:60',
            'fruits_price' => 'required|string|max:60',
            'expiry_date' => 'required|date|max:60',
            'fruits_img' => 'nullable|string|max:60',
        ]);
    
            fruits::create($validatedData);
            return redirect()->back()->withSuccess('Data successfully save');
    }

    // show function
    public function show($id){
        $fruit = fruits::findOrFail($id);
        return view('fruits.show', compact('fruit'));
    
    }

    // edit function
    public function edit($id){
        $fruit = fruits::findOrFail($id);
        return view('Fruits.edit', compact('fruit'));
      
    }

    // update function
    public function update(Request $request, $id){
        $fruit = fruits::findOrFail($id);

        $validatedData = $request->validate([
            'fruits_name' => 'required|string|max:60',
            'fruits_type' => 'nullable|string|max:60',
            'fruits_price' => 'required|string|max:60',
            'expiry_date' => 'required|date|max:60',
            'fruits_img' => 'nullable|string|max:60',
        ]);
        $fruit->update($validatedData);
        return redirect()->route('fruits.index')->withSuccess('Data Update successfully');

    }

    // delete function
    public function destroy($id){
        $fruit =fruits::findOrFail($id);
        $fruit->delete();

        return redirect()->back()->withSuccess('data deleted');

    }

}
