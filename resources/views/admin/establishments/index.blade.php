<x-app>
    <h1>Llistat de usuaris per a poder administrar</h1>
    <table class="table table-light">
        <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Tipus</th>
            <th>Ciutat</th>
            <th>Adreça</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $establishment)
            <tr>
                <td></td>
                <td>{{$establishment->name}}</td>
                <td>{{$establishment->establishment_type}}</td>
                <td>{{$establishment->city}}</td>
                <td>{{$establishment->address}}</td>
                <td>
                    <a href="{{ route('establishment.edit', ['id' => $establishment->id]) }}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('establishment.softdelete', ['id' => $establishment->id]) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app>