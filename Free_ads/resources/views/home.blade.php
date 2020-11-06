@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="/posts/create" class="btn btn-primary" style="margin-bottom:15px">Créer une annonce</a>
                    <hr>
                    <h3>Vos annonces</h3>
                    
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Titre</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Modifier l'annonce</a></td>
                            <td>
                                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
                                {!! Form::close() !!} 
                            </td>
                        </tr>   
                        @endforeach
                    </table>
                @else
                <p>Vous n'avez publié aucun article</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
