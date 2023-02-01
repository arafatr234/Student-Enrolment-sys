@extends('layout')


@section('content')

         <div class="row user-profile">
            <div class="col-lg-12 side-left">
            	<!--lg=10 eta width -->
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{$admin_description_profile->admin_name}}</p>
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

                    <a class="website">
                      <i class="icon-globe icon">Phone: </i>
                      <span style="font-family:vernada;font-size:15px">{{$admin_description_profile->admin_phone}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Email: </i>
                      <span style="font-family:vernada;font-size:15px">{{$admin_description_profile->admin_email}}</span>
                    </a>
                   
                    
                   

                  </div>
                </div>
              </div>
            </div>

          </div>
         

@endsection