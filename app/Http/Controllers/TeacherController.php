<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
use BD;
use Session;
session_start(); 


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Models\AddStudent;

class TeacherController extends Controller{
     
     public function addteacher(){
           return view('admin.add_teacher');   
    }


  //   public function allteacher(){
  //         return view('admin.allteacher');   
   //  }


     public function saveteacher(Request $request){
        $data=array();   
        $data['teachers_name']=$request->teachers_name;
        $data['teachers_email']=$request->teachers_email;
        $data['teachers_phone']=$request->teachers_phone;
        $data['teachers_address']=$request->teachers_address;
        $data['teachers_department']=$request->teachers_department;
        $data['teachers_password']=md5($request->teachers_password); 
       


          DB::table('teachers_tbl')->insert($data);
        //  return view('admin.add_teacher');


           Session::put('exeption','teacher added successfully');
             return Redirect::to('/add_teacher');
       
        }


        //ALL Teachers shows are here
         public function allteacher(){
          		$allteacher_info=DB::table('teachers_tbl')     
        				  ->get();
               	//student_tbl table theke sob value ene $allstudent_info te rakhlam
        		$manage_teacher=view('admin.allteacher')
                          ->with('all_teacher_info',$allteacher_info);
             	//admin.allstudent page ta show korte chai                   
            	return view('layout')
                    	->with('allteacher',$manage_teacher);              
          		// return view('admin.allstudent');   
        }   







//TEACHER UNDER ADMIN

          //DELETE  
          public function teacherdelete($teachers_id){
                  DB::table('teachers_tbl')
                      ->where('teachers_id',$teachers_id)
                      ->delete();
                     //return view('admin.allstudent');
                      return Redirect::to('/allteacher');
                    //eikhane return view('admin.allstudent'); eta kaj korbe na.karon
                    //allstudent ei function theke gele [$all_student_info] ei variable 
                    // ta khuje pabe na.  
                }            
            //    public function studentview($student_id){
            //           return view('admin.view');
            //    } 




           //VIEW               
                 public function teachertview($teachers_id){
                     $teacher_description_view=DB::table('teachers_tbl')
                                    ->select('*')
                                    ->where('teachers_id',$teachers_id)
                                    ->first();
                     //  echo"</prev>";
                     //  print_r($teacher_description_view);
                     //  echo"</prev>"; 
                     
                     //akta student er sokol data pass korlem $manage_description_student
                     //er moddhe..view korbo admin.view and $student_description_view
                     $manage_description_teacher=view('admin.teacherview')
                                    ->with('teacher_description_profile',
                                      $teacher_description_view);
                      return view('layout')
                           ->with('view',$manage_description_teacher);  

                      //laout page ta show korbe and sathe student er informatoin show korbe                         
                }




       //EDIT 
             public function teacheredit($teachers_id){
                    $teacher_description_view=DB::table('teachers_tbl')
                            ->select('*')
                            ->where('teachers_id',$teachers_id)
                            ->first();
                    //   echo"</prev>";
                    //   print_r($student_description_view);
                    //   echo"</prev>";
                    $manage_description_teacher=view('admin.teacheredit')
                                    ->with('teacher_description_profile',$teacher_description_view);
                      return view('layout')
                           ->with('view',$manage_description_teacher);  
                }




            //UPDATE
              ///jehetu form submit korar pore post hobe tai parameter hisebe request disi  
               public function teacherupdate(Request $request,$teachers_id){                 
                   // echo"</prev>";
                   // print_r($student_id);
                $data=array();
                $data['teachers_name']=$request->teachers_name;
                $data['teachers_email']=$request->teachers_email;
                $data['teachers_phone']=$request->teachers_phone;
                $data['teachers_address']=$request->teachers_address;
                $data['teachers_password']=md5($request->teachers_password);   
               
               


                          DB::table('teachers_tbl')
                            ->where('teachers_id',$teachers_id)
                            ->update($data);
                       //student table er ei id ke dhore data guli update korte hobe


                            Session::put('exeption','student update successfully');
                            return Redirect::to('/allteacher');

                }

}