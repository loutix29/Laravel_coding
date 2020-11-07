@extends('layouts.app_admin')



@section('content')

<h2>Liste des categories</h2>
<b>annonces actuellement publiées sur le site.</b> 
<hr>
{{-- <td>En tant qu'administrateur voulez vous créer une annonce ?     </td>
<td><a href="{{route('posts.create')}}" class="btn btn-success" style="margin-bottom:15px;">Créer une annonce</a></td>
<hr>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th> 
        <th>Picture</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        
        <th>Supprimer</th>
        <th>Modifier</th>
        
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->price}}</td>
        <td>{{$post->picture}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
    
        <td>
            {!! Form::open(['action' => ['App\Http\Controllers\Admin_postController@destroy',$post->id], 'method'=>'POST']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
            {!! Form::close() !!} 
        </td>
        <td><a href="posts/{{$post->id}}/edit" class="btn btn-secondary">Modifier</a></td>
       
    </tr>   
    @endforeach
</table> --}}


@endsection
