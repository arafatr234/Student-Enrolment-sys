
@extends('teacher.teacher_layout')


@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update your profile</h2>     
                              <p class="alrt-success" style="color:blue;"><?php
                              $exeption=Session::get('exeption');
                                if($exeption){
                                      echo "$exeption";
                                      Session::put('exeption',null);
                                }
                          ?></p>   
                          
                         <form method="post" action="{{URL::to('/teacher_own_update')}}">
                               @csrf

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone"
                                   value="{{($teachers_setting->teachers_phone)}}">
                                  
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address"
                                  
                                   value="{{($teachers_setting->teachers_address)}}">
                                 
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Password</label>
                                  <input type="password" class="form-control p-input" name="teachers_password"      
                                    value="{{($teachers_setting->teachers_password)}}">
                             
                             
                              </div>

                                 <button type="submit" class="btn btn-success btn-block">Update Data</button>

                    
                       </form>           
                                          

@endsection