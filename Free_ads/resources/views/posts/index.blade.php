@extends('layouts.app')

@section('content')

<!--<h2>Toutes les annonces</h2>
<span>Actuellement <b><u>{{(count($posts))}} annonces</u></b> publiées sur le site</span>
<hr>-->
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="{{ asset('images/carousel-1.png') }}" class="d-block w-100" alt="carousel_1">
      <div class="carousel-caption d-none d-md-block">
          <h5>Welcome!</h5>
          <p>Choose or add your mug</p>
        </div>
    </div>
    <div class="carousel-item" data-interval="10000">
      <img src="{{ asset('images/carousel-2.png') }}" class="d-block w-100" alt="carousel_2">
      <div class="carousel-caption d-none d-md-block">
          <h5>News!</h5>
          <p>New mug collection</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/carousel-3.png') }}" class="d-block w-100" alt="carousel_">
      <div class="carousel-caption d-none d-md-block">
          <h5>News!</h5>
          <p>New mug collection</p>
        </div>
    </div>
  </div>
  
</div>
<a href="/posts/create" class="btn btn-success" style="margin-bottom:15px;">Créer une annonce</a>

<div class="row">
@if(count($posts)>=1)
    @foreach ($posts as $post)
            <div class="col-4">            
                <div class="card" style="width:auto">   

                   <a href="/posts/{{$post->id}}"> <img class="card-img-top" src="{{ asset('images/proxy-image.jpeg') }}" alt="Card image cap"></a>
                   <!-- <a href="/posts/{{$post->id}}" class="btn btn-primary">Voir l'annonce</a> -->
                    
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <p class="card-text">{{$post->limit()}}</p>
                    </div>
                      
                    
                </div>
            </div>    
           
    @endforeach
@else
    <p>Aucun Articles existants !</p>
@endif
<br>
<br>
</div>
@endsection



{{-- 


    @if(count($posts)>=1)
        @foreach ($posts as $post)
            <div class="well">
            <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>écrit le {{$post->created_at}}</small>
                <p>{{$post->body}}</p>
                <hr>
                <p><a href="/posts/{{$post->id}}">Voir l'annonce</a></p>
            </div>            
        @endforeach
    @else
        <p>Aucun Articles existants !</p>
    @endif --}}
