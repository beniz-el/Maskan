@extends('layouts.navbar')

@section('content')
<style>
#bcg{
	background-image: url("images/apartment-books-chairs-2079246.jpg");
	background-size: 100% ;
}
</style>
<div class="container">
  <div class="card h-100">
    <div id="bcg" class="row justify-content-center">
        <div class="col-md-6">
            <div class="pannel-heading">
                
                       
                        <center><strong>Ajout d'un article</strong></center><br><br>
            </div>

           <div class="pannel-body">
            <form action="{{ route('addimage') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" value="{{ Session::token() }}" name="_token">
              {{ csrf_field() }}
              
                
            <div  class="form-group">
                   <center><select  name="a">
        <option value="louer">Louer</option>
        <option value="vendre">Vendre</option>
    </select></center>
  </div>

    <div class="form-group">
                    <strong><label>Name</label></strong>
                    <input type="text" name="name" class="form-control">

           </div>
            <div class="form-group">
                    <strong><label>Type</label></strong>
                    <input type="text" name="type" class="form-control">

           </div>
           <div class="form-group">
                    <strong><label>Prix</label></strong>
                    <input type="text" name="prix" class="form-control">

           </div>

           <div class="form-group">
                    <strong><center><label>Piéces</label></center></strong><br>
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

           <div class="form-group">
                    <strong><label>Surface</label></strong>
                    <input type="text" name="surface" class="form-control">

           </div>

            <div class="form-group">
                    <strong><label for="textarea">Description</label></strong>
                   <textarea id="textarea" class="form-control" name="description" rows="4"></textarea>

           </div>
           <div class="form-group">
                    <strong><label>Tel</label></strong>
                    <input type="text" name="tel" class="form-control">

           </div>
           <div class="form-group">
                    <strong><label>Email</label></strong>
                    <input type="email" name="email" class="form-control">

           </div>

          <div class="form-group d-flex flex-column">
                    <strong><label>Image</label></strong>
                    <input type="file" name="file" >

           </div>
           
           <div class="form-group">
            <center><button type="submit" class="btn btn-success btn-lg">Enregistrer</button></center>
           </div>

       </form>

   </div>
        </div>
    </div>
  
   </div>     
</div>
</div>
</body>
</html>
