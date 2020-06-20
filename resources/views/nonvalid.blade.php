@extends('layouts/navbar')

@section('content')

  <div class="container">

    <div class="row">

     
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">



<br>




        <div class="row">
@foreach($nonvalids as $nonvalid)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{ route('showv',['id'=>$nonvalid->id]) }}"><img class="card-img-top" src="{{ asset('uploads/images/' . $nonvalid->image) }}"></a>
              <div class="card-body">
                
                <h4 class="card-title">
                  <a href="{{ route('showv',['id'=>$nonvalid->id]) }}">{{ $nonvalid->name }}</a>
                </h4>
                <h5>{{ $nonvalid->prix }}</h5>
                <p class="card-text">
                  <a><strong>Type:</strong>  {{ $nonvalid->type }}</a><br>
                  <a><strong>À:</strong> {{ $nonvalid->a }}</a><br>
                            <a><strong>Piéces:</strong> {{ $nonvalid->chambre }} Chambre {{ $nonvalid->salon }} Salon {{ $nonvalid->bain }} Salle de bain et {{ $nonvalid->cuisine }} Cuisine</a><br>
                            <a><strong>Surface:</strong> {{ $nonvalid->surface}}</a><br>
                            <a><strong>Description:</strong> {{ $nonvalid->description}}</a><br>
                            <a><strong>Tel:</strong> {{ $nonvalid->tel}}</a><br>
                            <a><strong>Email:</strong> {{ $nonvalid->email}}</a>

                </p>

              </div>
              <center>
                <a href="{{ route('valider',['id'=>$nonvalid->id]) }}" class="btn btn-lg btn-success" type="submit">Valider</a>

                <a href="{{ route('supprimer',['id'=>$nonvalid->id]) }}" class="btn btn-lg btn-success" type="submit">Supprimer</a>
              </center>            
              </div>
          </div>
@endforeach
          
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

