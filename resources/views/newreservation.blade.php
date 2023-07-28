@extends('layout.app')

@section('title')
    New Reservation
@endsection

@section('content')
    <div class="p-5">
        <h4  class="text-center mb-4">Book New Reservation</h4>
        <form action="{{route('form-reserve')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-2">
                     <div class="form-group mb-3">
                        <label for="title" class="form-label"> Title:</label>
                        <select name="title" id="title" class="form-select" required>
                            <option value="">Select Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss.">Miss.</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                     <div class="form-group mb-3">
                        <label for="first-name" class="form-label"> First Name:</label>
                        <input type="text" class="form-control" name="firstname" id="first-name" placeholder="Enter Your Fist Name" required>
                    </div>
                </div>
                <div class="col-5">
                     <div class="form-group mb-3">
                        <label for="last-name" class="form-label"> Last Name:</label>
                        <input type="text" class="form-control" name="lastname" id="last-name" placeholder="Enter Your Last Name" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group mb-3">
                       <label for="email" class="form-label"> Email: </label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="example@email.com" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group mb-3">
                       <label for="phone" class="form-label"> Phone Number: </label>
                        <input type="text" id="phone" class="form-control" name="phone" placeholder="08012345678" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group mb-3">
                       <label for="date" class="form-label"> Date: </label>
                        <input type="datetime-local" id="date" class="form-control" name="date" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                       <label for="adults" class="form-label"> Number of Adults: </label>
                        <select name="adult" id="adult" class="form-select" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                       <label for="children" class="form-label"> Number of Children: </label>
                       <select name="children" id="adults" class="form-select" required>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary w-100">Reserve</button>
                </div>
            </div>
        </form>
    </div>
@endsection
