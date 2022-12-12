@extends('layouts.app')

@section('content')
<h1>Listagem de contatos

    (<a href="{{ route('users.create') }}"> + </a>)
</h1>


<ul>

    @foreach ($users as $user)
    <li>
        {{ $user->name}} --
     {{ $user->email}}
     || <a href= "{{route('users.show', ['id' => $user->id])}}"> Telefone </a>
</li>


    @endforeach
    </ul>
