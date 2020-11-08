@extends('layouts.app')




@section('content')
<h1>Création de l'article</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'=>'POST'],['enctype'=>"multipart/form-data"])!!}
    <div class="form-group">
        {{Form::label('title','Titre')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>"Titre de l'annonce"])}}
    </div>
    
    
    <div class="form-group">
        {{Form::select('category', ['1' => 'voyage', '2' => 'hôtel'], null, ['placeholder' => 'Catégorie'])}}
    </div>    


    
    <div class="form-group">
        {{Form::label('description','Contenu')}}
        {{Form::textarea('description','',['class'=>'form-control','placeholder'=>"Le contenu de l'annonce"])}}
    </div>
    <div class="form-group">
        {{Form::label('price','Prix')}}
        {{Form::number('price','',['class'=>'form-control','placeholder="Prix de vente 0.00€" step="0.01" min="0"'=>"Le contenu de l'annonce"])}}
    </div>
    <div class="form-group">
        {{Form::label('picture','Photo')}}
        {{Form::text('picture','',['class'=>'form-control','placeholder'=>"Uploader lien de l'image"])}}
    </div>    
        
        {{Form::submit('Rédiger une annonce',['class'=>'btn btn-lg btn-primary'])}}

{!! Form::close() !!}


@endsection

