@extends('layouts.app')


@section('content')

            <h1>{{$post->title}}</h1>
                
            <div class="card-content" style="text-align:center">
                <p style="text-align:justify">{!!$post->description!!}</p>
                <p style="text-align:justify;font-size: 30px;color: #3490dc">{!!$post->price!!}€</p>
                <img class = "card-content-img" src="{{ asset('images/proxy-image.jpeg') }}" alt="Card image">
            </div> 
            <small>écrit le {{$post->created_at}}</small>
            <hr>
            <div class="btn-option" style=text-align:center>
            <a href="/posts" class="btn btn primary-lg btn-primary">Retour</a>
        
        @if(!Auth::guest()) 
           
        <!-- <div class="btn-option" style=text-align:center> -->
    
        <a href="/posts/{{$post->id}}/edit" class="btn btn primary-lg btn-primary">Editer l'annonce</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
        {!! Form::close() !!}
        </div>
        </p>
        @endif
    @endsection