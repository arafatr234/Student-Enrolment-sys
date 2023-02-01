@extends('layout')


@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit student</h2>        
                          
                         <form method="post"                              
                               action="{{URL::to('/update_student/'.
                               $student_description_profile->student_id)}}"
                           >
                               @csrf

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student name
                                  </label>
                                   <!--name=student_name(database er sathe mil thakte hobe)-->
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" 
                                   value="{{($student_description_profile->student_name)}}">
                                   <!-- (student_description_profile) ei variable er moddhe sob ase.
                                       tar moddhe theke nam ta show korate chassi
                                   -->
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll"
                                  value="{{($student_description_profile->student_roll)}}">
                                  <!-- (student_description_profile) ei variable er moddhe sob ase.
                                       tar moddhe theke roll ta show korate chassi
                                   -->

                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" 
                                  value="{{($student_description_profile->student_fathersname)}}">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" 
                                   value="{{($student_description_profile->student_mothersname)}}">
                               </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" 
                                  value="{{($student_description_profile->student_email)}}">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" 
                                   value="{{($student_description_profile->student_phone)}}">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Address</label>
                                  <input type="text" class="form-control p-input" name="student_address"
                                    value="{{($student_description_profile->student_address)}}">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Password</label>
                                  <input type="password" class="form-control p-input" name="student_password"
                                     value="{{($student_description_profile->student_address)}}">
                              </div>

                      <!--
                   
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                          -->                                  

                                <!--
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Department </label>
                                      <select class="form-control p-input" name="student_department">
                                             <option value="1">CSE</option>
                                             <option value="2">BBA</option>
                                             <option value="3">ECE</option>
                                             <option value="4">EEE</option>
                                             <option value="5">MBA</option>
                                      </select>
                                </div>
                                -->

                              <div class="form-group">
                                <label for="exampleInputPassword1">Admission year</label>
                                  <input type="date" class="form-control p-input"  
                                  name="student_adminssionyear"
                                  placeholder="Admission year"
                                  value="{{($student_description_profile->student_adminssionyear)}}">
                               </div> 
                 
                                  <button type="submit" class="btn btn-success btn-block">Update Data</button>

                       </form>           
                                          

@endsection