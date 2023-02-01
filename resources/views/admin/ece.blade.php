@extends('layout')


@section('content')


 <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
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

                    	 @foreach($ece_student_info as $v_student)

                      <tr>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>{{$v_student->student_address}}</td>
                          <td>{{$v_student->student_department}}</td>
                          <td>{{$v_student->student_email}}</td>
                         
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
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