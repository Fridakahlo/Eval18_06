 <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

  <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
 
@section('content')
<section>
  
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
     <h2>Réservation</h2>
      <div>Chambre: {{$room ['name']}}</div>
      <img src="/img/chambre.jpeg" class="img-responsive" height="150" width="300" alt="Room photo">
    <!-- Form code begins -->
     <form action="{{ url('room-description')}}/{{$name}}/booking/validate" method="post">
        {{ csrf_field() }}
        <div class="form-group"> <!-- Arrival date input -->
          <label class="control-label" for="date">Date d'arrivé</label>
          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
        </div>

        <div class="form-group"> <!-- Depature date input -->
          <label class="control-label" for="date2">Date de départ</label>
          <input class="form-control" id="date2" name="date2" placeholder="MM/DD/YYY" type="text"/>
        </div>

        <div class="form-group"> <!--Show the customers -->
          <label>Customer</label>
            <select class="form-control" id="customer" name="customer">
              @foreach($customers as $customer)
                <option id="{{$customer->id}}"> {{ $customer->first_name }} {{ $customer->last_name }} </option>
            @endforeach
            </select>
        </div>

        <div class="form-group"> <!--Show the  -->
          <label>Status</label>
            <select class="form-control" id="status" name="status">
               @foreach($status as $value)
                <option id="{{$value->id}}">{{ $value->booking_status}}</option>
              @endforeach
            </select>
        </div>
            
        <div class="form-group"> <!-- Submit button -->
          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>
      </form>
     <!-- Form code ends --> 

    </div>
  </div>    
 </div>
</div>

</section>

<script src="{{ asset('js/booking.js') }}" defer></script>





