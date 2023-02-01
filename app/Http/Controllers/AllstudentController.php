<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect; 
use Session;
session_start();
use Illuminate\Support\Str;


class AllstudentController extends Controller{     
    
   
     //ALLStudent
     //database theke all student page e information ene show kora
     public function allstudent(){
          $allstudent_info=DB::table('student_tbl')     
        				  ->get();
               //student_tbl table theke sob value ene $allstudent_info te rakhlam
        	$manage_student=view('admin.allstudent')
                          ->with('all_student_info',$allstudent_info);
             //admin.allstudent page ta show korte chai                   
            return view('layout')
                    ->with('allstudent',$manage_student);              
          // return view('admin.allstudent');   
        }   





          //DELETE  
          public function studentdelete($student_id){
                  DB::table('student_tbl')
                      ->where('student_id',$student_id)
                      ->delete();
                     //return view('admin.allstudent');
                      return Redirect::to('/allstudent');
                    //eikhane return view('admin.allstudent'); eta kaj korbe na.karon
                    //allstudent ei function theke gele [$all_student_info] ei variable 
                    // ta khuje pabe na.  
                }            
            //    public function studentview($student_id){
            //           return view('admin.view');
            //    } 






              //VIEW               
                 public function studentview($student_id){
                     $student_description_view=DB::table('student_tbl')
                                    ->select('*')
                                    ->where('student_id',$student_id)
                                    ->first();
                     //  echo"</prev>";
                     //  print_r($student_description_view);
                     //  echo"</prev>"; 
                     
                     //akta student er sokol data pass korlem $manage_description_student
                     //er moddhe..view korbo admin.view and $student_description_view
                     $manage_description_student=view('admin.view')
                                    ->with('student_description_profile',
                                      $student_description_view);
                      return view('layout')
                           ->with('view',$manage_description_student);  

                      //laout page ta show korbe and sathe student er informatoin show korbe                         
                }
          
              




              //EDIT 
             public function studentedit($student_id){
                    $student_description_view=DB::table('student_tbl')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
                    //   echo"</prev>";
                    //   print_r($student_description_view);
                    //   echo"</prev>";
                    $manage_description_student=view('admin.studentedit')
                                    ->with('student_description_profile',$student_description_view);
                      return view('layout')
                           ->with('view',$manage_description_student);  
                }





              //UPDATE
              ///jehetu form submit korar pore post hobe tai parameter hisebe request disi  
               public function studentupdate(Request $request,$student_id){                 
                   // echo"</prev>";
                   // print_r($student_id);
                $data=array();
                $data['student_name']=$request->student_name;
                $data['student_roll']=$request->student_roll;
                $data['student_fathersname']=$request->student_fathersname;
                $data['student_mothersname']=$request->student_mothersname;
                $data['student_email']=$request->student_email;
                $data['student_phone']=$request->student_phone;
                $data['student_address']=$request->student_address;
                $data['student_password']=md5($request->student_password);   
                $data['student_adminssionyear']=$request->student_adminssionyear;
               


                          DB::table('student_tbl')
                            ->where('student_id',$student_id)
                            ->update($data);
                       //student table er ei id ke dhore data guli update korte hobe


                            Session::put('exeption','student update successfully');
                            return Redirect::to('/allstudent');

                }
}