@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit teacher</h2>        
                          
                         <form method="post"                              
                               action="{{URL::to('/update_teacher/'.
                               $teacher_description_profile->teachers_id)}}"
                           >
                               @csrf

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher name
                                  </label>
                                   <!--name=student_name(database er sathe mil thakte hobe)-->
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" 
                                   value="{{($teacher_description_profile->teachers_name)}}">
                                   <!-- (student_description_profile) ei variable er moddhe sob ase.
                                       tar moddhe theke nam ta show korate chassi
                                   -->
                              </div>

                              

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Email</label>
                                  <input type="email" class="form-control p-input" name="teachers_email" 
                                  value="{{($teacher_description_profile->teachers_email)}}">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" 
                                   value="{{($teacher_description_profile->teachers_phone)}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address"
                                    value="{{($teacher_description_profile->teachers_address)}}">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Password</label>
                                  <input type="password" class="form-control p-input" name="teachers_password"
                                     value="{{($teacher_description_profile->teachers_password)}}">
                              </div>

                       
                 
                                  <button type="submit" class="btn btn-success btn-block">Update Data</button>

                       </form>           
                                          

@endsection