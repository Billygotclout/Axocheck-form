@include('inc.nav')
@extends('layouts.app')
<div class="container-sm bg-white mt-5 w-50 "  >
    <p class="h2  pt-3 pb-3 text-uppercase">Sponsor's Details</p>
<form action="/edit" class=" g-3 needs-validation "  novalidate method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$sponsor['id']}}">
  <div class="form-group col-md-6">
    <label for="email"class="form-label">Email Address</label>
    <input type="email" class="form-control" name="emailAddress" required value="{{$sponsor['emailAddress']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="fname" class="form-label"> First Name</label>
    <input type="text" class="form-control" name="Firstname" required value="{{$sponsor['Firstname']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="lname" class="form-label"> Last Name</label>
    <input type="text" class="form-control" name="Lastname" required value="{{$sponsor['Lastname']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="phonenumber" class="form-label"> Phone Number</label>
    <input type="text"  class="form-control" name="Phonenumber" required value="{{$sponsor['Phonenumber']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="city" class="form-label"> Enter City</label>
    <input type="text" class="form-control" name="City" required value="{{$sponsor['City']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="country" class="form-label"> Enter Country</label>
    <input type="text" class="form-control" name="Country" required value="{{$sponsor['Country']}}">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="text-center">
  
  <button type="submit" class="btn btn-primary mt-5 mb-5 ">Update Sponsors Details</button>
</div>
</form>


  </div>
 
  
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>