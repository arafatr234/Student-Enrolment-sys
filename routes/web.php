<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\AllstudentController;
use App\Http\Controllers\CSEController;
use App\Http\Controllers\ECEController;
use App\Http\Controllers\BBAController;
use App\Http\Controllers\EEEController;
use App\Http\Controllers\MBAController;
use App\Http\Controllers\TutionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherOwnController;



Route::get('/admin', function () {
    return view('admin.admin_login');
});
Route::get('/teacher', function () {
    return view('teacher.teacher_login');
});
Route::get('/student', function () {
    return view('student_login');
});






Route::get('/adminlogin', function () {
      // return view('admin.dashboard');
});
Route::get('/teacherlogin', function () {
     return view('teacher.tdashboard');
});
Route::get('/studentlogin', function () {
   return view('student.dashboard');
});




Route::get('/savestudent', function () {
       //return view('admin.add_student');
});

Route::get('/update_student/{student_id}', function () {
   // return view('student_login');
});

Route::get('/update_teacher/{teachers_id}', function () {
   // return view('student_login');
});
Route::get('/save_teacher', function () {
       //return view('admin.add_student');
});
Route::get('/student_own_update', function () {
       //return view('admin.add_student');
});
Route::get('/teacher_own_update', function () {
       //return view('admin.add_student');
});

//Route::get('/logout', function () {
//       return view('admin.admin_login');
//});

//Route::get('/admin_dashboard', function () {
//       return view('admin.dashboard');
//});


//clcik korle ja hobe
Route::post('/adminlogin',[AdminController::class,'login_dashborad']);
Route::post('/studentlogin',[AdminController::class,'student_login_dashborad']);
Route::post('/teacherlogin',[TeacherOwnController::class,'teacher_login_dashborad']);


Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard']);
Route::get('/student_dashborad',[AdminController::class,'student_dashborad']);



//ADMIN
Route::get('/logout',[AdminController::class,'logout']);
Route::get('/admin_view_profile',[AdminController::class,'adminViewProfile']);
Route::get('/setting',[AdminController::class,'setting']);



//STUDENT OWN
Route::get('/student_logout',[StudentController::class,'studentlogout']);
Route::get('/student_viewprofile',[StudentController::class,'studentviewprofile']);
Route::get('/student_setting',[StudentController::class,'studentsetting']);
Route::post('/student_own_update',[StudentController::class,'StudentOwnUpdate']);




//TEACHER OWN
Route::get('/teacherOwn_viewprofile',[TeacherOwnController::class,'teacherOwnViewProfile']);
Route::get('/teacherOwn_setting',[TeacherOwnController::class,'teacherOwnSetting']);
Route::get('/teacherOwn_logout',[TeacherOwnController::class,'teacherOwnLogout']);
Route::post('/teacher_own_update',[TeacherOwnController::class,'teacherOwnUpdate']);






//add student
Route::get('/addstudent',[AddstudentController::class,'addstudent']);
//Route::post('/addstudent',[AddstudentController::class,'addstudentpost']);

//post
//Route::get('/savestudent',[AddstudentController::class,'savestudent']);
Route::post('/addstudent',[AddstudentController::class,'addstudentpost']);



//all pages route are here
Route::get('/allstudent',[AllstudentController::class,'allstudent']);
Route::get('/tutionfee',[TutionController::class,'tution']);
Route::get('/cse',[CSEController::class,'cse']);
Route::get('/ece',[ECEController::class,'ece']);
Route::get('/bba',[BBAController::class,'bba']);
Route::get('/eee',[EEEController::class,'eee']);
Route::get('/mba',[MBAController::class,'mba']);
Route::get('/add_teacher',[TeacherController::class,'addteacher']);
Route::get('/allteacher',[TeacherController::class,'allteacher']);

//Route::get('/save_teacher',[TeacherController::class,'saveteacher']);
Route::post('/save_teacher',[TeacherController::class,'saveteacher']);



//STUDENT UNDER ADMIN

//delete
Route::get('/student_delete/{student_id}',[AllstudentController::class,'studentdelete']);

//<a href="{{URL::to('/student_delete/'.$v_student->student_id)}}"> all student.blade.php te
//id pass korsi.tai ekhaneo{student_id} likhe disi

//view
Route::get('/student_view/{student_id}',[AllstudentController::class,'studentview']);

//edit
Route::get('/student_edit/{student_id}',[AllstudentController::class,'studentedit']);

//update.(update student e click korle jeta hobe)
Route::post('/update_student/{student_id}',[AllstudentController::class,'studentupdate']);




//TEACHER UNDER ADMIN

//delete
Route::get('/teacher_delete/{teachers_id}',[TeacherController::class,'teacherdelete']);



//<a href="{{URL::to('/student_delete/'.$v_student->student_id)}}"> all student.blade.php te
//id pass korsi.tai ekhaneo{student_id} likhe disi


//View
Route::get('/teacher_view/{teachers_id}',[TeacherController::class,'teachertview']);

//Edit
Route::get('/teacher_edit/{teachers_id}',[TeacherController::class,'teacheredit']);

//update.(update student e click korle jeta hobe)
Route::post('/update_teacher/{teachers_id}',[TeacherController::class,'teacherupdate']);