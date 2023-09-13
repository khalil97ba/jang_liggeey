<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::paginate(3);
        return view('index' , compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required',
            'section'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $request->file('image');
        $destination = 'image/';
        $profileImage = date('ymdHis').".".$image->getClientOriginalExtension();
        $image->move($destination, $profileImage);
        $validateData['image'] = $profileImage;

        $student = student::create($validateData);
        
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = student::find($id);
        return view('edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required',
            'section'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $request->file('image');
        $destination = 'image/';
        $profileImage = date('ymdHis').".".$image->getClientOriginalExtension();
        $image->move($destination, $profileImage);
        $validateData['image'] = $profileImage;


        $student = student::find($id);

        
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->section = $request->input('section');
        $student->image =$validateData['image'];
        
        $student->save();
        
        

        return redirect('/student');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $student = Student::find($id);

        $student->delete();

        return redirect('/student');

    }
}
