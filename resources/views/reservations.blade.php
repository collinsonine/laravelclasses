@extends('layout.app')

@section('title')
    All Reservations
@endsection

@section('content')
<div class="p-5">
    <div class="row mb-3">
        <div class="text-start col h4">
          All Reservations
        </div>
       <div class="text-end col">
        <a href="{{route('reservation.form')}}" class="btn btn-primary btn-sm"> Add New</a>
       </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">First Name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Adults</th>
            <th scope="col">Children</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            ?>
         @foreach ($reservations as $data)
         <tr>
             <td>{{$i++}}</td>
             <td>{{$data->date}}</td>
             <td>{{$data->firstname}}</td>
             <td>{{$data->lastname}}</td>
             <td>{{$data->email}}</td>
             <td>{{$data->phone}}</td>
             <td>{{$data->adult}}</td>
             <td>{{$data->children}}</td>
             <td class="text-center">
                <div class="btn-group">
                    <a href="#" class="btn btn-info"> Edit</a>
                    &nbsp;
                    <a href="#" class="btn btn-danger"> Delete</a>
                </div>
             </td>
         </tr>
         @endforeach
        </tbody>
      </table>
</div>
@endsection
