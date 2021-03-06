<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools=School::all();
        return view("school.index",["schools"=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("school.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school=new School();

        $school->name=$request->school_name;
        $school->description=$request->school_description;
        $school->place=$request->school_place;
        $school->phone=$request->school_phone;

        if ($request->has('school_logo')) {

            $imageName=time().'.'.$request->school_logo->extension();
            $school->logo= '/images/'.$imageName;

            $request->school_logo->move(public_path('images'), $imageName);
            } else {
                $school->school_logo= '/images/placeholder.png';
            }

            $school->save();

            return redirect()->route("school.index");
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view ("school.show", ["school"=>$school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view("school.edit", ["school"=>$school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {

        $school->name=$request->school_name;
        $school->description=$request->school_description;
        $school->place=$request->school_place;
        $school->phone=$request->school_phone;

        if($request->has('school_logo'))
        {
            $logoName = time().'.'.$request->school_logo->extension();
            $school->logo = '/images/'.$logoName;
            $request->school_logo->move(public_path('images'), $logoName);
        }

        $school->save();
        return redirect()->route("school.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route("school.index");
    }
}
