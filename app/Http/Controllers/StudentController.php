<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view("student.index",["students"=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Student;

        $student->name=$request->student_name;
        $student->surname=$request->student_surname;
        $student->group_id=$request->student_group_id;
        //$student->image_url=$request->student_image_url;

        // patikrina ar laukelis netuscias. tuscias- false, ne- true

        if ($request->has('student_image_url')) {


        // tokia eilute issaugo originalu paveiksliuko formata
        $imageName=time().'.'.$request->student_image_url->extension();
        $student->image_url= '/images/'.$imageName;


        $request->student_image_url->move(public_path('images'), $imageName);
        } else {
            $student->image_url= '/images/placeholder.png';
        }

        $student->save();

        return redirect()->route("student.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view ("student.show", ["student"=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("student.edit", ["student"=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->group_id = $request->student_group_id;

        //jeigu paveikslio inputus uzpildytas -> tada ikelia nauja paveiksliuka ir priskiria nauja reiksme duomenu bazeje
        // jeigu paveiksliu inputas neuzpildytas -> tada priskiria placholder.png !!!!

        if($request->has('student_image_url'))
        {
            $imageName = time().'.'.$request->student_image_url->extension();
            $student->image_url = '/images/'.$imageName;
            $request->student_image_url->move(public_path('images'), $imageName);
        }

        $student->save();
        return redirect()->route("student.index");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("student.index");
    }
}
