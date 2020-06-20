@extends('layouts.navbar')

@section('content')
<div class="container">

    <div class="row">

     
      <div class="col-lg-9">

        <!-- ========================= SECTION INTRO ========================= -->




<br>
     <div class="row">


          <div class="col-lg-4 col-md-6 mb-4">
           
              <a><img  src="{{ asset('uploads/images/' . $location->image) }}" alt=""></a>
              <br>
                <center><strong>Article : <h20>{{ $location->name }}</h20></strong></center> 
                <br>
                <h5>Prix: {{ $location->prix }}</h5>
                <p >
                    <a><strong>Type:</strong> {{ $location->type }}</a><br>
                     <a><strong>À:</strong> {{ $location->a }}</a><br>
                            <a><strong>Piéces:</strong> {{ $location->chambre }} Chambre {{ $location->salon }} Salon {{ $location->bain }} Salle de bain et {{ $location->cuisine }} Cuisine</a><br>
                            <a><strong>Surface:</strong> {{ $location->surface}}</a><br>
                            <a><strong>Description:</strong> {{ $location->description}}</a><br>
                            <a><strong>Tel:</strong> {{ $location->tel}}</a><br>
                            <a><strong>Email:</strong> {{ $location->email}}</a>
                </p>
              </div>
              
            </div>
          </div>

          
      </div>
        <!-- /.row -->

  
@endsection

