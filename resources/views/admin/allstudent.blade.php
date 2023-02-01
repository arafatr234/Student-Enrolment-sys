@extends('layout')


@section('content')
         
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>

                        <p class="alrt-success" style="color:blue;"><?php
                              $exeption=Session::get('exeption');
                                if($exeption){
                                      echo "$exeption";
                                      Session::put('exeption',null);
                                }
                          ?></p>
    

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>st_name</th>
                          <th>st_roll</th>
                          <th>Phone</th>
                          <th>Adress</th>
                          <th>Department</th>
                          <th>Email</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                    	 @foreach($all_student_info as $v_student)

                       <!-- $all_student_info er moddhe protekta student er 
                       information ase  -->

                      <tr>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>{{$v_student->student_address}}</td>
                          <td>{{$v_student->student_department}}</td>
                          <td>{{$v_student->student_email}}</td>
                         
                          <td>
                            <a href="{{URL::to('/student_view/'.$v_student->student_id)}}">
                            <button class="btn btn-outline-primary">View</button>
                           

                           <a href="{{URL::to('/student_edit/'.$v_student->student_id)}}">
                           <button class="btn btn-outline-warning">Edit</button>
                          

                           <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}">
                           <button class="btn btn-outline-danger">Delete</button>
                          </td>

                      </tr>
                     
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
@endsection

