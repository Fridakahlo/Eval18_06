@extends('layouts.default')

@section('content')


<form action="/booking" class="form" method="post" action="{{ url('bookings') }}">
  {{ csrf_field() }}


    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputLastName4">Last Name</label>
          <input type="text" class="form-control" id="inputLastName4" placeholder="Last Name" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputFirstName4">First Name</label>
          <input type="text" class="form-control" id="inputFirstName4" placeholder="First Name" required="">
        </div>
    </div>  

    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>

    <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
       </div>

    <div class="form-row">    
        <div class="form-group col-md-6">
        <label for="inputPhone">Phone</label>
        <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
    </div>
     <div class="form-row">
      <div class="form-group col-md-6">
                <label for="arrival_date">Date d'arrivée</label>
                <input type="date" class="form-control" id="arrival_date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="arrival_date">Date de départ</label>
                <input type="date" class="form-control" id="departure_date" required>
            </div>   
    </div>
    
    </div>
  </div>
  <button type="submit" class="btn btn-secondary btn-lg active btn_focus">Réserver</button>
</form>