<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){
       $students = Student::latest()->paginate(4);
       return view('home', compact('students'));
   }

   public function addStudent(Request $request){
       $request->validate(
           [
               'name'=>'required | unique:students',
               'email'=>'required | unique:students',
               'course'=>'required ',
           ],
           [
               'name.required'=>'Name is Required',
               'name.unique'=>'You are Already Existed',
               'email.required'=>'Email is Required',
               'email.unique'=>'Email is Already Existed',
               'course.required'=>'Course is Required ',
           ]
       );

       $student = new Student();
       $student->name = $request->name;
       $student->email = $request->email;
       $student->course = $request->course;
       $student->save();
       return response()->json([
            'status' => 'success',
       ]);
   }

    public function editStudent(Request $request){
        $request->validate(
            [
                'edit_name'=>'required | unique:students,name,'.$request->edit_id,
                'edit_email'=>'required | unique:students,email,'.$request->edit_id,
                'edit_course'=>'required ',
            ],
            [
                'edit_name.required'=>'Name is Required',
                'edit_name.unique'=>'You are Already Existed',
                'edit_email.required'=>'Email is Required',
                'edit_email.unique'=>'Email is Already Existed',
                'edit_course.required'=>'Course is Required ',
            ]
        );

        Student::where('id',$request->edit_id)->update([
            'name'=>$request->edit_name,
            'email'=>$request->edit_email,
            'course'=>$request->edit_course,
        ]);

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function deleteStudent(Request $request){
       Student::find($request->student_id)->delete();
        return response()->json([
            'status' => 'success',
        ]);
   }

   public function pagination(Request $request){
       $students = Student::latest()->paginate(4);
       return view('home_student', compact('students'));
   }

   public function searchStudent(Request $request){
    $students = Student::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('course', 'like', '%'.$request->search_string.'%')
        ->orderBy('id', 'desc')->paginate(4);

       if($students->count() >= 1){
           return view('home_student', compact('students'));
       }
       else{
           return response()->json([
               'status' => 'Nothing_found',
           ]);
       }
   }

}
