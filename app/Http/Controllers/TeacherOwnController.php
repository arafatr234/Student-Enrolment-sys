<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Http\Request;
use Session;
session_start();
use DB; 



class TeacherOwnController extends Controller{

//TEACHER LOGIN PART START		
//TEACHER log in dashborard

     public function teacher_login_dashborad(Request $request){
       // return view('admin.dashboard');
       	$email=$request->teachers_email;
       	$password=md5($request->teachers_password);
       	$result=DB::table('teachers_tbl')
       		->where('teachers_email',$email)
       		->where('teachers_password',$password)
       		->first();    
  
     

//database theke ene mass korlam

       if($result){
            Session::put('teachers_email',$result->teachers_email);
            Session::put('teachers_password',$result->teachers_password);
            return Redirect::to('/teacherlogin');
        
       }
       else{
             Session::put('exception','email or password Invalid');
             return Redirect::to('/teacher');
       }

    }

//TEACHER LOGIN PART END





//STUDENT ER KHETRE ID DIYE KORSI
//BUT EKHANE EMAIL DIYE KORSI..KARON ID PASSE NA.SESSION E EMAIL AR PASSWORD ASE.TAI EMAIL DIYE KORS    
public function teacherOwnViewProfile(){
            
             $teachers_email=Session::get('teachers_email');

                      $teachers_profile=DB::table('teachers_tbl')
                                    ->select('*')
                                    ->where('teachers_email',$teachers_email)
                                    ->first();




                   //    echo"</prev>";
                   //    print_r($teachers_profile);
                   //    echo"</prev>"; 
                     
                     //akta student er sokol data pass korlem $manage_description_student
                     //er moddhe..view korbo admin.view and $student_description_view
                      $manage_teachers=view('teacher.teacher_view')
                                      ->with('teachers_profile',$teachers_profile);
                       return view('teacher.teacher_layout')
                                   ->with('teacher.teacher_view',$manage_teachers);  


              
    }


    public function teacherOwnSetting(){
           $teachers_email=Session::get('teachers_email');
           $teachers_setting=DB::table('teachers_tbl')
                            ->select('*')
                            ->where('teachers_email',$teachers_email)
                            ->first();
                    
                    $manage_teacher=view('teacher.teacherOwn_setting')
                                    ->with('teachers_setting', $teachers_setting);
                      return view('teacher.teacher_layout')
                           ->with('view',$manage_teacher);     
          
    }


    

      public function teacherOwnUpdate(Request $request){  
                $teachers_id=Session::get('teachers_id');
                $data=array();            
                $data['teachers_phone']=$request->student_phone;
                $data['teachers_address']=$request->student_address;
                $data['teachers_password']=md5($request->student_password);   
                
               
                      DB::table('teachers_tbl')
                            ->where('teachers_id',$teachers_id)
                            ->update($data);
                       //student table er ei id ke dhore data guli update korte hobe
                            Session::put('exeption','student update successfully');
                            return Redirect::to('/teacherOwn_setting');

      }



    public function teacherOwnLogout(){
           Session::put('teachers_name',null);
           Session::put('teachers_id',null);
           return Redirect::to('/teacher');
    }  





}
