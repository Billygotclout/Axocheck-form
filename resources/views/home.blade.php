@include('inc.nav')
@extends('layouts.app')

@section('content')
<div class=" jumbotron">
    <p class="text-center h1 MT-5 MB-4">WELCOME TO THE AXOCHECK/FLERI FORM   </p>
<p class="h4 text-center">PLEASE CLICK ON THE BUTTON BELOW TO CONTINUE TO THE FORM</p>
<div class="d-grid gap-2 col-6 mx-auto mt-5">
<a href="/sponsor" class="btn btn-primary text-center">Fill Form</a>
</div>
</div>
@endsection
  {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}