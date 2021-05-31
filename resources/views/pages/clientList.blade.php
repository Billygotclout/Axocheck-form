@include('inc.nav')
@extends('layouts.app')
@section('content')
    <h1 class="h3 mb-5 mt-4">Lists Of Registered Clients</h1>
   
    <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>relationship</td>
            <td>gender</td>
            <td>dob</td>
            <td>Phonenumber</td>
            <td>City</td>
            <td>Country</td>
            <td>state</td>
            <td>ailments</td>
            <td>special</td>
            <td>dov</td>
           
        </tr>
        @foreach ($clients as $client)
        <tr>
         <td>{{$client->id}}</td>
         <td>{{$client->Firstname}}</td>
         <td>{{$client->Lastname}}</td>
         <td>{{$client->relationship}}</td>
         <td>{{$client->gender}}</td>
         <td>{{$client->dob}}</td>
         <td>{{$client->Phonenumber}}</td>
         <td>{{$client->City}}</td>
         <td>{{$client->Country}}</td>
         <td>{{$client->state}}</td>
         <td>{{$client->ailments}}</td>
         <td>{{$client->special}}</td>
         <td>{{$client->dov}}</td>
         
        
     </tr>
        @endforeach
      
  
@endsection