@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-lg">
                <div class="card-body">
                   <p class="fw-bold">Meeting today</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-lg">
                <div class="card-body">
                    <p class="fw-bold">Upcoming Meeting</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-lg">
                <div class="card-body">
                    <p class="fw-bold">Cancelled Meeting</p>
                </div>
            </div>
        </div>

    </div>
@endsection