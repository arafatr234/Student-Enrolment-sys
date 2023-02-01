@extends('student_layout')


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
                          
                         <form method="post" action="{{URL::to('/student_own_update')}}">
                               @csrf

  

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone"
                                    value="{{($student_setting->student_phone)}}">
                                  
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Address</label>
                                  <input type="text" class="form-control p-input" name="student_address"
                                    value="{{($student_setting->student_address)}}">
                                 
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Stundent Password</label>
                                  <input type="password" class="form-control p-input" name="student_password"
                                    value="{{($student_setting->student_password)}}">
                             
                              </div>

                                 <button type="submit" class="btn btn-success btn-block">Update Data</button>

                    
                       </form>           
                                          

@endsection