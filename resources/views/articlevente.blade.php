@extends('layouts.navbar')

@section('content')
     <div class="row">


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a><img class="card-img-top" src="{{ asset('uploads/images/' . $vente->image) }}" alt=""></a>
              <div class="card-body">
                
                <h4 class="card-title">
                  <a>{{ $vente->name }}</a>
                </h4>
                <h5>{{ $vente->prix }}</h5>
                <p class="card-text">
                    <a>Type: {{ $vente->type }}</a><br>
                    <a><strong>À:</strong> {{ $vente->a }}</a><br>
                            <a>Piéces: {{ $vente->chambre }} Chambre {{ $vente->salon }} Salon {{ $vente->bain }} Salle de bain et {{ $vente->cuisine }} Cuisine</a><br>
                            <a>Surface: {{ $vente->surface}}</a><br>
                            <a>Description: {{ $vente->description}}</a><br>
                            <a>Tel: {{ $vente->tel}}</a><br>
                            <a>Email: {{ $vente->email}}</a>
                </p>
              </div>
              
            </div>
          </div>

          
      </div>

  @endsection


