<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
use BD;
use Session;
session_start(); 
use Illuminate\Support\Str;
//use App\Http\Controllers\DB;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Models\AddStudent;


class AddstudentController extends Controller{
     public function addstudent(){
          return view('admin.add_student');   
     }

   //////image sorasori database e upload hoy na first e public->images e upload hoy then sekhan theke
   //////address ta database e upload hoy 
   //value insert form to databse code..
       public function addstudentpost(Request $request){
        $data=array();   
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathersname']=$request->student_fathersname;
        $data['student_mothersname']=$request->student_mothersname;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=md5($request->student_password);   
        $data['student_department']=$request->student_department;
        $data['student_adminssionyear']=$request->student_adminssionyear;
        


        
       
         DB::table('student_tbl')->insert($data);
         Session::put('exeption','student added successfully');
         return view('admin.add_student');

     }
}







 // $image=$request->file('student_image');
  
        // if($image){
        //    $image_name=str_random(20);
        //    $ext=strtolower($image->getClientOriginalExtention());
        //    $image_full_name=$image_name.'.'.$ext;
        //    $upload_path='image/';
        //    $image_url=$upload_path.$image_full_name;
        //    $success=$image->move($upload_path,$image_full_name);
        //    if($success){
        //        $data['student_image']=$image_url;
        //        DB::table('tbl_employee')->insert($data);
        //        Session::put('message','employee added succesfully');
        //        return Rederect::to('/add_student');   
        //    }  
          


        //          $data['image']=$image_url;
        //          DB::table('student_tbl')->insert($data);
        //          Session::put('message','student added successfully');
        //          return Rederect::to('/add_student');
        //     }
