@extends('layout.master')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">My Profile</h4>
    </div>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- <h6 class="card-title">Basic Form</h6> --}}
                <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mr-2"><i data-feather="save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
