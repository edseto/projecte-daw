<?php
echo "<h1>Llistat de usuaris per a poder administrar</h1>";
?>

<table class="table table-light">
    <thead>
        <tr>
            <th>Usuari</th>
            <th>Nom</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $user)
        <tr>
            <td>{{$user->username}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->role}}</td>
            <td>
                <a href="#">Editar</a>
            </td>
            <td>
                <a href="#">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>