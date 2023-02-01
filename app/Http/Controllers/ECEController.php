<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ECEController extends Controller{
     public function ece(){
         
     	    $ecestudent_info=DB::table('student_tbl')     
        				->where(['student_department'=>3])
        				->get();
        	$manage_student=view('admin.ece')
                          ->with('ece_student_info',$ecestudent_info);
            return view('layout')
                    ->with('ece',$manage_student);

         //   return view('admin.cse');                      
     
    }
}