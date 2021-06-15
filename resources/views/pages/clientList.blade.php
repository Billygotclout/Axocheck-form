@include('inc.nav')
@extends('layouts.app')
@section('content')
    <h1 class="h3 mb-5 mt-4">Lists Of Registered Clients</h1>
<div class="table-responsive">
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
            <td></td>
            <td></td>
           
        </tr>
        @foreach ($clients as $client)
        @if (Auth::user()->id == $client->user_id)
            
      
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
         <td><a href={{"editC/".$client['id']}} class="btn btn-primary">Edit</a></td>
         <td><a href={{"deleted/".$client['id']}} class="btn btn-danger">Delete</a></td>

         
         
        
     </tr>
     @endif
        @endforeach
    </table>
</div>

      
  
@endsection