<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddStudent extends Model{
    use HasFactory;

   protected $table='employees';
   protected $fillable=['student_id','student_name','student_roll','student_roll','student_fathersname'
                        'student_fathersname','student_mothersname','student_email',
                        'student_phone','student_address','student_image','student_password',
                        'student_department','student_adminssionyear'];

}