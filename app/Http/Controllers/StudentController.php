<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect; 
use Illuminate\Http\Request;
use Session;
session_start();
use DB; 

class StudentController extends Controller{
    public function studentviewprofile(){
            
             $student_id=Session::get('student_id');

                      $student_profile=DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first();
                     //  echo"</prev>";
                     //  print_r($student_description_view);
                     //  echo"</prev>"; 
                     
                     //akta student er sokol data pass korlem $manage_description_student
                     //er moddhe..view korbo admin.view and $student_description_view
                     $manage_student=view('student.student_view')
                                    ->with('student_profile',$student_profile);
                      return view('student_layout')
                                 ->with('student_view',$manage_student);  

              
    }
    
    public function studentsetting(){
           $student_id=Session::get('student_id');
           $student_setting=DB::table('student_tbl')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
                    
                    $manage_student=view('student.student_setting')
                                    ->with('student_setting', $student_setting);
                      return view('student_layout')
                           ->with('view',$manage_student);     
          
    }

      public function StudentOwnUpdate(Request $request){  
                $student_id=Session::get('student_id');
                $data=array();            
                $data['student_phone']=$request->student_phone;
                $data['student_address']=$request->student_address;
                $data['student_password']=md5($request->student_password);   
                
               
                      DB::table('student_tbl')
                            ->where('student_id',$student_id)
                            ->update($data);
                       //student table er ei id ke dhore data guli update korte hobe
                            Session::put('exeption','student update successfully');
                            return Redirect::to('/student_setting');

      }



    public function studentlogout(){
           Session::put('student_name',null);
           Session::put('student_id',null);
           return Redirect::to('/student');
    }  

    

}
