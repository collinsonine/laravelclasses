@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
<div class="card-body">
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{Session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
        <div class="col-6">
            <a href="{{route('reservation.form')}}" style="text-decoration: none;">
            <div class="card shadow">

                <div class="text-center">
                    <img src="{{asset('new.svg')}}" alt="new reservation" height="100" width="100">
                    <h5>New Reservation</h5>
                </div>

            </div>
        </a>
        </div>
        <div class="col-6">
            <a href="{{route('reservations.all')}}" style="text-decoration: none;">
            <div class="card shadow">
                <div class="text-center">
                    <img src="{{asset('manage.svg')}}" alt="Manage reservation" height="100" width="100">
                    <h5>Manage Reservations</h5>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection
