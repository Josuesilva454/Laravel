<h1>Usuarios</h1>

<ul>

    @foreach ($users as $user)
    <li>
        {{ $user->name}} --
     {{ $user->email}}
     || <a href= "{{route('users.show', ['id' => $user->id])}}"> Telefone </a>
</li>


    @endforeach
    </ul>
