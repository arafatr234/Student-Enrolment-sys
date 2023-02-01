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
                          <th>T_name</th>
                          <th>Phone</th>                
                          <th>Adress</th>
                          <th>Department</th>                  
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    	 @foreach($all_teacher_info as $v_teacher)

                       <!-- $all_student_info er moddhe protekta student er 
                       information ase  -->

                      <tr>
                          <td>{{$v_teacher->teachers_name}}</td>
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td>{{$v_teacher->teachers_department}}</td>
                                               
                         
                          <td>
                            <a href="{{URL::to('/teacher_view/'.$v_teacher->teachers_id)}}">
                            <button class="btn btn-outline-primary">View</button>
                           

                           <a href="{{URL::to('/teacher_edit/'.$v_teacher->teachers_id)}}">
                           <button class="btn btn-outline-warning">Edit</button>
                          

                           <a href="{{URL::to('/teacher_delete/'.$v_teacher->teachers_id)}}">
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