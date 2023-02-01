@extends('layout')


@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add student</h2>   
                          
                            <p class="alrt-success" style="color:blue;"><?php
                              $exeption=Session::get('exeption');
                                if($exeption){
                                      echo "$exeption";
                                      Session::put('exeption',null);
                                }
                          ?></p>
                           
                         <form action="addstudent" method="post">
                               @csrf

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student name
                                  </label>
                                   <!--name=student_name(database er sathe mil thakte hobe)-->
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="student_name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="student_roll">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" placeholder="student_fathersname">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" placeholder="student_mothersname">
                               </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="student_email">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone"placeholder="student_phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Address</label>
                                  <input type="text" class="form-control p-input" name="student_address"placeholder="student_address">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Password</label>
                                  <input type="password" class="form-control p-input" name="student_password"placeholder="student_password">
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
                              
                              <div class="form-group">
                                <label for="exampleInputPassword1">Admission year</label>
                                  <input type="date" class="form-control p-input"  
                                  name="student_adminssionyear"
                                  placeholder="Admission year">
                               </div> 
                 




                                  <button type="submit" class="btn btn-success btn-block">Submit</button>


                       </form>           
                                          

@endsection