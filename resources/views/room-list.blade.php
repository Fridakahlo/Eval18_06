@extends('layouts.default')

@section('content')


<section class="container">
  
  <div class="row">
    <div class="col-md-12 col-sm-12 person text-center">  
      
      <h1>Chambres</h1>

        @foreach ($rooms as $room)
          <img src="/img/chambre.jpeg" class="img-responsive" height="150" width="300" alt="Room photo">
          
        	<h3>{{$room ['name']}}</h3>
        	<p>Type de chambre:
              @if ($room ['is_suite'] == 1)
                Suite
              @else
                Standard
              @endif
          </p>
        	<p>Prix: {{$room ['price']}} €</p>
        	<p>Accessibilité:
              @if ($room ['reduced_mobility_access'] == 1)
                Oui
              @else
                Non
              @endif  
          </p>
        	<p>Type de lit: 
               @if ($room ['bed_type_id'] == 1)
                Single
              @elseif ($room ['bed_type_id'] == 2)
                Queen Size
              @else
                King Size
              @endif  
          </p>
     
      <p><a href="/room-list/{{$room->id}}" type="button" class="btn btn-dark">Voir plus</a></p>
    <!--   @if ($room ['id'] %2 == 0)   
        <p class="pull-right"><p>
      @else 
        <p class="pull-left"></p>
      @endif   -->   
  @endforeach
    </div>  
  </div>
</section>

@endsection 


