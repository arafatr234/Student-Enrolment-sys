<!-- kon layout seta bole dite hobe.
student_layout bole dilam na hole admin er layout e chole jeto -->

@extends('student_layout')
@section('content')


 <div class="col-sm-6 col-md-3 grid-margin">

              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Students</h2>

                  @php
                      $student=DB::table('student_tbl')
                             ->count('student_id');                           
                  @endphp
                    <!--  student table theke id guli count korbe-->
                  <!--  kotojon student ase seta dynamicly show korabo-->
                  <p style="font-family: cursive;font-size: 20px;font-weight: bold;text-align: center;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teacher</h2>

                   @php
                      $teacher=DB::table('teachers_tbl')
                             ->count('teachers_id');                           
                  @endphp
                  <p style="font-family: cursive;font-size: 20px;font-weight: bold;text-align: center;">{{$teacher}}</p> 
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fee</h2>
                  <p style="font-family: cursive;font-size: 20px;font-weight: bold;text-align: center;">Monthly tution fee:2500tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Salary</h2>
                  <p style="font-family: cursive;font-size: 20px;font-weight: bold;text-align: center;">12</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
         

   
  

         

@endsection