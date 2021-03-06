@include('inc.nav')

@extends('layouts.app')
@section('content')
    <h1 class="h3 mb-5 mt-4">Lists Of Registered Sponsors</h1>
   <div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td >Id</td>
            <td>Firstname</td>
            <td>Lastname</td>
            
            <td>Phonenumber</td>
            <td>Email Address</td>
            <td>City</td>
            <td>Country</td>
            <td></td>
            <td></td>
       
            
            
           
        </tr>
        @foreach ($sponsors as $sponsor)
        @if (Auth::user()->id == $sponsor->user_id)
        <tr>
         <td>{{$sponsor->id}}</td>
         <td>{{$sponsor->Firstname}}</td>
         <td>{{$sponsor->Lastname}}</td>
         <td>{{$sponsor->Phonenumber}}</td>
         <td>{{$sponsor->emailAddress}}</td>
         <td>{{$sponsor->City}}</td>
         <td>{{$sponsor->Country}}</td>
         <td><a href={{"edit/".$sponsor['id']}} class="btn btn-primary">Edit</a></td>
         <td><a href={{"delete/".$sponsor['id']}} class="btn btn-danger">Delete</a></td>
        
         
         
        
     </tr>
     @endif
        @endforeach
    </table>
</div>
      
  
@endsection