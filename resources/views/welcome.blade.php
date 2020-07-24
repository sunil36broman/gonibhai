@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center logincustom">
        <div class="col-md-8">
           <div class="home_page" style="
    text-align: center;
">

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
           <h1> Welcome to Public Works Department </h1>
           <h3>Apply for PWD Accommodation</h3>
           <h4><a href="{{ route('application') }}">Apply Now</a></h4>
           </div>
        </div>
    </div>
</div>
@endsection
