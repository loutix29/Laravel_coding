@extends('layouts.app_admin')


@section('content')
@if (Auth::check() && Auth::user()->admin != 1)
<p> NO ACCESS </p>
@else


hello
<h1>Modifier les infos User</h1>
{!! Form::open(['action' => ['App\Http\Controllers\Admin_userController@update',$user->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Titre')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>"Titre de l'annonce"])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Contenu')}}
        {{Form::textarea('description',$post->description,['class'=>'form-control','placeholder'=>"Le contenu de l'annonce"])}}
    </div>
    <div class="form-group">
        {{Form::label('price','Prix')}}
        {{Form::number('price',$post->price,['class'=>'form-control','placeholder="Prix de vente 0.00€" step="0.01" min="0"'=>"Le contenu de l'annonce"])}}
    </div>
    <div class="form-group">
        {{Form::label('picture','Photo')}}
        {{Form::text('picture',$post->picture,['class'=>'form-control','placeholder'=>"Uploader lien de l'image"])}}
    </div>    
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Envoyer mes modifications',['class'=>'btn btn-lg btn-primary'])}}
{!! Form::close() !!}
@else
@endsection

