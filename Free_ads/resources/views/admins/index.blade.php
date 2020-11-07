@extends('layouts.app_admin')



@section('content')

<h2>Liste des utilisateurs </h2> 
<b>{{count($users)}}  utilisateurs actuellement enregistrés sur le site.</b> 
<hr>

<table class="table table-striped">
    <tr>
        <th>User_name</th>
        <th>Administrateur</th>
        <th>Email</th>
        <th>created_at</th> 
        <th>updated_at</th>

        <th>Editer User</th>
        <th>Supprimer User</th>
        <th>Créer User</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->admin}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
    <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-secondary">Modifier</a></td>
        <td>
            {!! Form::open(['action' => ['App\Http\Controllers\Admin_userController@destroy',$user->id], 'method'=>'POST']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Supprimer',['class'=>'btn btn danger-lg btn-danger'])}}
            {!! Form::close() !!} 
        </td>

    </tr>   
    @endforeach
</table>


@endsection
