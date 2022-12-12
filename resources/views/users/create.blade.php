@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1>Listagem  </h1>


<form action="{{ route('users.store') }}" method="post">

     @csrf

    <input type="text" name="name" placeholder="Name" >
    <input type="text" name="email" placeholder="E-mail"  >
    <input type="text" name="password" placeholder="Senha"   >

    <button type="submit">
        enviar
    </button>
</form>

@endsection
