@extends('layouts.app')


@section('content')

            <h1>{{$post->title}}</h1>
                
            <div>
                <p>{!!$post->description!!}</p>
            </div> 
            <small>écrit le {{$post->created_at}}</small>
            <hr>
        
        @if(!Auth::guest()) 
           
        <p style=text-align:center>
    
        <a href="/posts/{{$post->id}}/edit" class="btn btn primary-lg btn-primary">Editer l'annonce</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
        {!! Form::close() !!}
        </p>
        @endif
    @endsection