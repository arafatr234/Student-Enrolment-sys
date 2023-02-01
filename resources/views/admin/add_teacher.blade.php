@extends('layout')


@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>   
                         
                        <p class="alrt-success" style="color:blue;"><?php
                              $exeption=Session::get('exeption');
                                if($exeption){
                                      echo "$exeption";
                                      Session::put('exeption',null);
                                }
                          ?></p>
                           
                         <form action="/save_teacher" method="post">
                               @csrf

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name
                                  </label>
                                   <!--name=student_name(database er sathe mil thakte hobe)-->
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="teacher_name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Email</label>
                                  <input type="email" class="form-control p-input" name="teachers_email" placeholder="teacher_email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" placeholder="teacher_phone">
                              </div>
                              
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address"placeholder="teacher_address">
                              </div>
                             


                       
                      <!--
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                     
                                    </div>
                                  </div>
                              </div>
                      -->      

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department </label>
                                      <select class="form-control p-input" name="teachers_department">
                                             <option value="1">CSE</option>
                                             <option value="2">BBA</option>
                                             <option value="3">ECE</option>
                                             <option value="4">EEE</option>
                                             <option value="5">MBA</option>
                                      </select>
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Password</label>
                                  <input type="password" class="form-control p-input" name="teachers_password"placeholder="teacher_password">
                              </div>
                           

                                  <button type="submit" class="btn btn-success btn-block">Add Teacher</button>


                       </form>           
                                          

@endsection






