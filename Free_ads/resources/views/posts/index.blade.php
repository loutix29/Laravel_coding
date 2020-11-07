@extends('layouts.app')




@section('content')

<h2>Toutes les annonces</h2>
<span>Actuellement <b><u>{{(count($posts))}} annonces</u></b> publiées sur le site</span>
<hr>
<a href="/posts/create" class="btn btn-success" style="margin-bottom:15px;">Créer une annonce</a>

<div class="row">
@if(count($posts)>=1)
    @foreach ($posts as $post)
            <div class="col-4">            
                <div class="card" style="width:auto">    
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <p class="card-text">{{$post->description}}</p>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary">Voir l'annonce test</a>
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
