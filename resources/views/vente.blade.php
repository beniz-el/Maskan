@extends('layouts/navbar')

@section('content')

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Maskan</h1>
        <div class="list-group">
         <a href="{{ asset('/bureaux') }}" class="list-group-item">Bureaux</a>
          <a href="{{ asset('/magasins') }}" class="list-group-item">Magasins</a>
          <a href="{{ asset('/usines') }}" class="list-group-item">Usines</a>
          <a href="{{ asset('/garages') }}" class="list-group-item">Garages</a>
          <a href="{{ asset('/restaurants') }}" class="list-group-item">Restaurants</a>
          <a href="{{ asset('/terrains') }}" class="list-group-item">Terrains</a>
          <a href="{{ asset('/villas') }}" class="list-group-item">Villas</a>
          <a href="{{ asset('/maisons') }}" class="list-group-item">Maisons</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- ========================= SECTION INTRO ========================= -->
<style >
  #amal{
    min-height:50vh; 
    background-image:url("images/aerial-view-architecture-beautiful-2157194.jpg");
    background-size: 100% ;
    opacity:0.75;
  }
#cadre{
    border-style: groove;
  }
  


</style>
<section class="section-intro bg-secondary text-white text-center">
<div class="container d-flex flex-column"  id="amal">



</div>
</section>

<br>



<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form  action="/seearch" method="get">
                                
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <div id="cadre">
                                    <!--end of col-->
                                    <div  class="col">
                                      <br>
                                        <input class="form-control form-control-lg form-control-borderless" name="searchvente" type="search" placeholder="Search">
                                    </div>
                                    <!--end of col-->

                                 
                      <br>
                    
                   <center> <label>Chambre</label>
                <select  name="chambre">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
               </select>
               <label>Salon</label>
                <select  name="salon">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
               </select>
               <label>Salle de bain</label>
                <select  name="bain">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
               </select>
               <label>Cuisine</label>
                <select  name="cuisine">
       <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
               </select>


</center>
</div>
<br>
<div class="col-auto">
                                       <center> <button class="btn btn-lg btn-success" type="submit">Search</button></center>
                                      </div>
      </form>
                        </div>
                        <!--end of col-->
                    </div>

                    <div class="form-group">

           </div>
<br>
<!-- ========================= SECTION INTRO END// ========================= -->

        <div class="row">
@foreach($ventes as $vente)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{ route('showv',['id'=>$vente->id]) }}"><img class="card-img-top" src="{{ asset('uploads/images/' . $vente->image) }}"></a>
              <div class="card-body">
                
                <h4 class="card-title">
                  <a href="{{ route('showv',['id'=>$vente->id]) }}">{{ $vente->name }}</a>
                </h4>
                <h5>{{ $vente->prix }}</h5>
                <p class="card-text">
                  <a><strong>Type:</strong>  {{ $vente->type }}</a><br>
                            <a><strong>Piéces:</strong> {{ $vente->chambre }} Chambre {{ $vente->salon }} Salon {{ $vente->bain }} Salle de bain et {{ $vente->cuisine }} Cuisine</a><br>
                            <a><strong>Surface:</strong> {{ $vente->surface}}</a><br>
                            <a><strong>Description:</strong> {{ $vente->description}}</a><br>
                            <a><strong>Tel:</strong> {{ $vente->tel}}</a><br>
                            <a><strong>Email:</strong> {{ $vente->email}}</a>

                </p>
              </div>
              
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

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
