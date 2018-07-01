@extends('layouts.default')

@section('content')
<section class="container">	
	<div class="row">
		<div class="col-md-12 col-sm-12 text-center">
				<img src="/img/chambre.jpeg" class="img-responsive" height="150" width="300" alt="Room photo">
	  			<h3 class="name">{{$room -> name}}</h3>
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
	  			<p class="floor">Etage: {{$room -> floor}} ème</p>
	  			<p>Type de salle de bain : 
		               @if ($room ['bathroom_type_id'] == 1)
		                Douche
		              @elseif ($room ['bathroom_type_id'] == 2)
		                Baignoire
		              @else
		                Douche et baignoire
		              @endif  
		        </p>
		        <p>Type de vue : 
		               @if ($room ['view'] == 1)
		                Vue mer
		              @elseif ($room ['view'] == 2)
		                Vue montagne
		              @elseif ($room ['view'] == 3)
		                Vue parc
		              @else
		              	Pas spécifié
		              @endif  
		        </p>
	  			<p class="area">{{$room -> area}} m2</p>
	  			<a href="/booking/{{$room->id}}" type="button" class="btn btn-dark">Réserver</a></td>
	  		</div>	
	  	</div>
	  	
	</div>      
</section>
@endsection