@include('inc.nav')
@extends('layouts.app')
@section('content')
<div class="jumbotron tex t-center">
    <h1>Welcome To The Axocheck Business Data Collection Site</h1>
    <p>Please register or login with your official email address</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection

{{-- <p class="text-center h1 MT-5 MB-4">WELCOME TO THE AXOCHECK/FLERI FORM   </p>
<p class="h4 text-center">PLEASE CLICK ON THE BUTTON BELOW TO CONTINUE TO THE FORM</p>
<div class="d-grid gap-2 col-6 mx-auto mt-5">
<a href="/sponsor" class="btn btn-primary text-center">Fill Form</a>
</div> --}}