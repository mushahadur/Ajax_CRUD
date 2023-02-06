<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('home', ['students' => Student::orderBy('id', 'desc')->get()]);
    }

    public function addStudent(Request $request){
        $request->validate(
            [
                'name'=>'required | unique:students',
                'email'=>'required | unique:students',
                'image'=>'required ',
            ],
            [
                'name.required'=>'Name is Required',
                'name.unique'=>'You are Already Existed',
                'email.required'=>'Email is Required',
                'email.unique'=>'Email is Already Existed',
                'image.required'=>'Image is Required ',
            ]
        );
        Student::newStudent($request);
        return response()->json(['status'=>'success']);
    }

//    public function editStudent(Request $request){
//        $id = $request->student_id;
//        return view('edit_model', ['student' => Student::find($id)]);
//    }

    public function deleteStudent(Request $request){
        $id = $request->student_id;
        Student::deleteStudent($id);
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function updateStudent(Request $request){

        $request->validate(
            [
                'edit_name'=>'required | unique:students,name,'.$request->edit_id,
                'edit_email'=>'required | unique:students,email,'.$request->edit_id,
                'edit_image'=>'required ',
            ],
            [
                'edit_name.required'=>'Name is Required',
                'edit_name.unique'=>'You are Already Existed',
                'edit_email.required'=>'Email is Required',
                'edit_email.unique'=>'Email is Already Existed',
                'edit_image.required'=>'image is Required ',
            ]
        );

        Student::where('id',$request->edit_id)->update([
            'name'=>$request->edit_name,
            'email'=>$request->edit_email,
            'image'=>$request->edit_image,
        ]);

        return response()->json([
            'status' => 'success',
        ]);
    }

//
//    public function deleteStudent(Request $request){
//        Student::find($request->student_id)->delete();
//        return response()->json([
//            'status' => 'success',
//        ]);
//    }
}
