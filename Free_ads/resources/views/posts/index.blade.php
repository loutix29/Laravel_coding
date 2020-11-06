@extends('layouts.app')




@section('content')

<h2>Toutes les annonces</h2>
<span>Actuellement <b><u>{{(count($posts))}} annonces</u></b> publiées sur le site</span>
<hr>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="{{ asset('images/main.jpeg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="{{ asset('images/logo.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/logo.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div> 
<a href="/posts/create" class="btn btn-success" style="margin-bottom:15px;">Créer une annonce</a>

<div class="row">
@if(count($posts)>=1)
    @foreach ($posts as $post)
            <div class="col-4">            
                <div class="card" style="width:auto">   

                   <a href="/posts/{{$post->id}}"> <img class="card-img-top" src="{{ Storage::url($post->image) }}" alt="Card image cap"></a>
                   <!-- <a href="/posts/{{$post->id}}" class="btn btn-primary">Voir l'annonce</a> -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <p class="card-text">{{$post->description}}</p>
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
