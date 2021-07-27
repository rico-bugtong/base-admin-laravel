@extends('layout.master')

@push('plugin-styles')
  <!-- Plugin css import here -->
@endpush

@section('content')
  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Blank Page</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blank</li>
            </ol>
        </nav>
    </div>
  </div>

  
@endsection

@push('plugin-scripts')
  <!-- Plugin js import here -->
@endpush

@push('custom-scripts')
  <!-- Custom js here -->
@endpush