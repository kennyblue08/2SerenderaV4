@extends('layouts.frontend')
@section('title')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="skyward" style="text-align: center; height: 100px; overflow: hidden;">
                    <img src="{{ asset('assets/images/skywardlogo2.png') }}"
                        style="height: 100%; width: auto; object-fit: contain;" alt="skyward" />
                </div>
                <h6 class="d-flex justify-content-center align-items-center">Demo Request</h6>
                <form action="{{ url('submit-request') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-md-6 px-5">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="daytime" class="form-label">Date and Time</label>
                                    <input type="datetime-local" id="daytime" name="date_time" class="form-control">

                                </div>


                                <div class="col-md-12 mb-2">

                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company_name">

                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="visitor" class="form-label">Visitor Name</label>
                                    <input type="text" class="form-control" id="visitor" name="visitor_name">
                                </div>


                                <div class="col-md-12 mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="number" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="number" name="mobile_number">
                                </div>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <Span class="mb-2">Interest</Span>
                                    <div class="form-check">
                                        <input type="hidden" id="selectedItemIds" name="selectedItemIds">

                                        @foreach ($getInterests as $interest)
                                            <div>
                                                <input type="checkbox" id="interest_{{ $interest->id }}" name="interests[]"
                                                    value="{{ $interest->id }}" class="itemCheckbox">
                                                <label
                                                    for="interest_{{ $interest->id }}">{{ $interest->interest_label }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="remarks"></textarea>
                                </div>

                                <div class="col-md-12 mt-3 d-flex align-items-center justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
