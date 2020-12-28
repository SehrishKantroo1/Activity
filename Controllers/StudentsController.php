<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

const STUDENTS = '/students';
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'matric_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'citizenship'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'active_status'=>'required',
            'year_of_study'=>'required',
            'id_no'=>'required',
            'email'=>'required'
        ]);
        $students = new Students([
            'name' => $request->get('name'),
            'matric_no' => $request->get('matric_no'),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'citizenship' => $request->get('citizenship'),
            'marital_status' => $request->get('marital_status'),
            'religion' => $request->get('religion'),
            'active_status' => $request->get('active_status'),
            'year_of_study' => $request->get('year_of_study'),
            'id_no' => $request->get('id_no'),
            'email' => $request->get('email')
        ]);
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Students::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('students.edit', compact('students'));  
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
        $request->validate([
            'name'=>'required',
            'matric_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'citizenship'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'active_status'=>'required',
            'year_of_study'=>'required',
            'id_no'=>'required',
            'email'=>'required'
        ]);
        $students = Students::find($id);
        $students->name =  $request->get('name');
        $students->matric_no = $request->get('matric_no');
        $students->gender =  $request->get('gender');
        $students->date_of_birth = $request->get('date_of_birth');
        $students->citizenship =  $request->get('citizenship');
        $students->marital_status = $request->get('marital_status');
        $students->religion =  $request->get('religion');
        $students->active_status = $request->get('active_status');
        $students->year_of_study =  $request->get('year_of_study');
        $students->id_no = $request->get('id_no');
        $students->email = $request->get('email');
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect(STUDENTS)->with('success', 'Student Deleted!');
    }
}