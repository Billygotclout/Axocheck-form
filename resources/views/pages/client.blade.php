@extends('layouts.app')

<div class="container-sm bg-white mt-5 w-50"> 
    <p class="h2  pt-3 pb-3 text-uppercase">Client Details</p>
<form action="/createC" class=" g-3 needs-validation" novalidate method="POST">
  @csrf
  <div class="form-group col-md-6">
    <label for="Firstname" class="form-label" > First Name</label>
    <input type="text" class="form-control" name="Firstname" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="Lastname" class="form-label"> Last Name</label>
    <input type="text" class="form-control" name="Lastname" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="relationship" class="form-label">Relationship to sponsor</label>
   <select  name="relationship" class="form-control" required>
     <option value="" >Pick A Relationship</option>
     <option value="Self" >Self</option>
     <option value="Father">Father</option>
     <option value="Mother">Mother</option>
     <option value="Brother" >Brother</option>
     <option value="Sister">Sister</option>
     <option value="Uncle">Uncle</option>
     <option value="Aunt">Aunt</option>
     <option value="Husband">Husband</option>
     <option value="Wife">Wife</option>
     <option value="Son">Son</option>
     <option value="Daughter">Daughter</option>
     <option value="Nephew">Nephew</option>
     <option value="Niece">Niece</option>
     <option value="Grandfather">Grandfather</option>
     <option value="Grandmother">Grandmother</option>

   </select>
   <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6 mt-2">
    <label for="gender" class="form-check-label"> Gender</label>
    
  
  <div class="form-check" >
    <input class="form-check-input" type="radio" name="gender" required value="Male">
    <label class="form-check-label" for="male">
   Male
    </label>
  </div>
  <div class="form-check mb-2">
    <input class="form-check-input" type="radio" name="gender" required value="Female">
    <label class="form-check-label" for="female">
   Female
    </label>
  </div>
  <div class="invalid-feedback">Please fill out this field.</div>
</div>
  <div class="form-group col-md-6">
    <label for="dob" class="form-label"> Date of Birth</label>
    <input type="date" class="form-control" required name="dob">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="Phonenumber" class="form-label"> Phone Number</label>
    <input type="text" class="form-control" name="Phonenumber" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="City" class="form-label"> Enter City</label>
    <input type="text" class="form-control" name="City" required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="Country" class="form-label"> Enter Country</label>
   <select name="Country" id="" class="form-control">
     <option value="Nigeria" selected>Nigeria</option>
   </select>
   <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="state" class="form-label"> Enter State</label>
    <input type="text" class="form-control" name="state"required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="ailments" class="form-label">Any known Ailments?</label>
    <textarea class="form-control"  rows="5" name="ailments" ></textarea>
  </div>
  <div class="form-group col-md-6">
    <label for="special" class="form-label">Any Special Instructions?</label>
    <textarea class="form-control" name="special" rows="5" ></textarea>
  </div>
  <div class="form-group col-md-6">
    <label for="dov" class="form-label"> Select Date Of Visit</label>
    <input type="date" class="form-control" required name="dov">
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="text-center">
  
  <button type="submit" class="btn btn-primary mt-5 mb-5 ">Save And Submit</button>
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
</body>
</html>