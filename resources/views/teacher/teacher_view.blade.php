@extends('teacher.teacher_layout')


@php
  function convert_department($value){
         $values=[
            1=>'CSE',
            2=>'BBA',
            3=>'ECE',
            4=>'EEE',
            5=>'MBA', 
         ];
         return $values[$value];
}
@endphp



@section('content')


  <div class="row user-profile">
            <div class="col-lg-12 side-left">
            	<!--lg=10 eta width -->
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                    <img src="http://via.placeholder.com/47x47" alt="">

                      <p class="name">{{strtoupper($teachers_profile->teachers_name)}}</p>
                      <a class="email" href="#">${{$teachers_profile->teachers_email}}</a>

                  
                  <!-- with er 1st parameter jeta seta dara porobortite amra  show koranor try kore 
                  	thaki -->
                  
               
                  
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                   <h2 style="color:maroon;font-family: cursive;font-weight: bolder;">
                       United International University
                   </h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this student are given below</p>
                  </div>
                  <div class="info-links">
                   
                      
                     <a class="number">
                      <i class="icon-globe icon">Phone:</i>
                      <span style="font-family:vernada;font-size:15px">{{$teachers_profile->teachers_phone}}</span>
                    </a>
                     
                     <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family:vernada;font-size:15px">{{$teachers_profile->teachers_address}}</span>
                  
                    </a>


                    <a class="website">
                      <i class="icon-globe icon">Department:</i>
                      <span style="font-family:vernada;font-size:15px">
                        {{convert_department($teachers_profile->teachers_department)}}</span>
                    </a>
                     
                        <!--function call for convert number to string-->
                   
                    

                  </div>
                </div>
              </div>
            </div>

          </div>


@endsection