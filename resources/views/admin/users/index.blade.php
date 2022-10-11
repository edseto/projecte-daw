<x-app>
    <h1>Llistat de usuaris per a poder administrar</h1>
    <table class="table table-light">
        <thead>
        <tr>
            <th> </th>
            <th>Usuari</th>
            <th>Nom</th>
            <th>Rol</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{$user->profile_photo}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('users.softdelete', ['id' => $user->id]) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app>

