@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8 d-flex align-items-center justify-content-end">
                    <button type="button" class="btn btn-secondary">Block Schedule</button>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    |
                    <span class="material-symbols-outlined">
                        view_list
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                @foreach ($getSchedules as $getSchedule)
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <div class="card-body"
                                style="border:1px solid rgb(211, 211, 211); background-color:rgb(240, 240, 240);border-radius: 8px;">
                                <div class="col-md-12 mb-1 d-flex justify-content-end align-items-center">
                                    <span class="material-symbols-outlined text-primary" style="cursor: pointer;">
                                        edit_square
                                    </span>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="small fw-bold">Date & Time</div>
                                    <div>{{ \Carbon\Carbon::parse($getSchedule->date_time)->format('Y/m/d h:i A') }}</div>
                                </div>

                                <div class="col-md-12 mb-1">
                                    <div class="small fw-bold">Company</div>
                                    <div> {{ strtoupper($getSchedule->company_name) }}</div>
                                </div>

                                <div class="col-md-12 mb-1">
                                    <div class="small fw-bold">Visitor</div>
                                    <div>{{ strtoupper($getSchedule->visitor_name) }}</div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="small fw-bold">Email</div>
                                    <div>{{ $getSchedule->email }}</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="small fw-bold">Mobile</div>
                                    <div>{{ $getSchedule->mobile_number }}</div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end align-items-center mt-2">
                                    <button class="btn btn-success btn-sm">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
