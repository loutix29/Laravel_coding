@extends('layouts.app')


@section('content')

            <h1>{{$post->title}}</h1>
                
            <div class="card-content">
                <p>{!!$post->description!!}</p>
                <img class = "card-content-img" src="{{ Storage::url($post->image) }}" alt="test">
            </div> 
            <small>écrit le {{$post->created_at}}</small>
            <hr>
        
        @if(!Auth::guest()) 
           
        <div class="btn-option" style=text-align:center>
    
        <a href="/http://127.0.0.1:8000/posts" class="btn btn primary-lg btn-primary">Retour</a>
        <a href="/posts/{{$post->id}}/edit" class="btn btn primary-lg btn-primary">Editer l'annonce</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
        {!! Form::close() !!}
        </p>
        @endif
    @endsection