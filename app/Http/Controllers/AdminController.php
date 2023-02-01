<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Http\Controllers\Rederect;
use Illuminate\Support\Facades\Redirect; 
use Session;
Session_start(); 

class AdminController extends Controller{

   //admin login part
    public function admin_dashboard(){
           return view('admin.dashboard');   
    }

    public function adminViewProfile(){

           $admin_id=Session::get('admin_id');
           $admin_description_view=DB::table('admin_tbl')
                                    ->select('*')
                                    ->where('admin_id',$admin_id)
                                    ->first();
                     //  echo"</prev>";
                     //  print_r($student_description_view);
                     //  echo"</prev>"; 
                     
                     //akta student er sokol data pass korlem $manage_description_student
                     //er moddhe..view korbo admin.view and $student_description_view
                     $manage_description_admin=view('admin.admin_view_profile')
                                    ->with('admin_description_profile',
                                                    $admin_description_view);
                      return view('layout')
                           ->with('view',$manage_description_admin);  

                      //laout page ta show korbe and sathe student er informatoin show korbe  
         
    }
    public function setting(){
           return view('admin.setting');   
    }
    public function logout(){
           Session::put('admin_name',null);
           Session::put('admin_id',null);
           return Redirect::to('/backend');
    } 

    ////name and password mass korle then login hobe and admin_dashborad page e niye jabe otherwise Invalid dekhabe.
    public function login_dashborad(Request $request){
       // return view('admin.dashboard');
          $email=$request->admin_email;
          $password=md5($request->admin_password);
          $result=DB::table('admin_tbl')
          ->where('admin_email',$email)
          ->where('admin_password',$password)
          ->first();    
  
     // echo "</prev>";
     // print_r($result);


//database theke ene mass korlam
       if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/admin_dashboard');
       	
       }
       else{
       	     Session::put('exception','email or password Invalid');
             return Redirect::to('/admin');
       }

    }


//STUDENT log in dashborard

     public function student_login_dashborad(Request $request){
       // return view('admin.dashboard');
       $email=$request->student_email;
       $password=md5($request->student_password);
       $result=DB::table('student_tbl')
       ->where('student_email',$email)
       ->where('student_password',$password)
       ->first();    
  
     

//database theke ene mass korlam
       if($result){
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return Redirect::to('/studentlogin');
        
       }
       else{
             Session::put('exception','email or password Invalid');
             return Redirect::to('/student');
       }

    }





}




