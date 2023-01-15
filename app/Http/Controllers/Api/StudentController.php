<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=DB::table('students')->get();
        return \response()->json($student);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[];
        $data['class_id']=$request->class_id;
        $data['section_id']=$request->section_id;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data['photo']=$request->photo;
        $data['address']=$request->address;
        $data['gender']=$request->gender;
        DB::table('students')->insert($data);
        return \response('Student insert success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::findorfail($id);
        return response()->json($student);
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
        $data=[];
        $data['class_id']=$request->class_id;
        $data['section_id']=$request->section_id;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data['photo']=$request->photo;
        $data['address']=$request->address;
        $data['gender']=$request->gender;
        DB::table('students')->where('id',$id)->update($data);
        return \response('Student Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = DB::table('students')->where('id',$id)->first();
        $img_path = $img->photo;

        @unlink($img_path);
        DB::table('students')->where('id',$id)->delete();
        return response('Student delete');
    }
}
