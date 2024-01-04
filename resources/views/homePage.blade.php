@extends('layouts/master')

@section('contenu')

  <div class="container-fluid my-5">
    <div class="card shadow">
      <div class="h-10">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>


          <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
              <img src="Images/Villa1.jpg" class="d-block w-100 img-carousel" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="2000">
              <img src="Images/Villa1.jpg" class="d-block w-100 img-carousel" alt="...">
            </div>

            <div class="carousel-item">
              <img src="Images/Villa1.jpg" class="d-block w-100 img-carousel" alt="...">
            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>



    
  <div class="container-fluid">
    
      @foreach($annonces_rows as $annonces)

      <div class="row">
      @foreach($annonces as $annonce)
      
        <div class="col-md-3 mb-4">
          
         
          <div class="card shadow">
          <a href="{{ route('product', ['id' => $annonce['id_annonce']]) }}" > <img src="{{asset($annonce['id_annonce'].'-0.png')}}" class="card-img-top" alt="..." width="40" height="200"> </a>
                   <div class="card-body">
                      <p> 
                         <span class="left">{{$annonce['objet']['PrixObjet']}} DH</span>
                         <span class="right">{{strtoupper($annonce['objet']['VilleObjet'])}}</span>
                      </p>
                     
                      <p class="nomobjet">{{$annonce['id_annonce']}}</p>
                     <p class="nomobjet">{{$annonce['objet']['NomObjet']}}</p>
                  
                     <p class="card-text">@include('star-rating', ['note' => $annonce['note']])</p>
                     
                      
                                             
                   </div>
          </div>
          
      </div>
      
      @endforeach
      </div>
      @endforeach
    

  </div>



      
@endsection