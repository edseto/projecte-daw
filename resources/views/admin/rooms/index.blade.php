<x-app>
    <h1>Llistat d'habitacions per a poder administrar</h1>
    <table class="table table-light">
        <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Descripció</th>
            <th>Hotel</th>
            <th>Ciutat</th>
            <th>Adreça</th>
            <th>Capacitat</th>
            <th>Preu</th>
            <th> </th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $room)
            @php $establishment = $room->establishment()->get()->first(); @endphp
            <tr>
                <td></td>
                <td>{{$room->name}}</td>
                <td>{{$room->description}}</td>
                <td>{{$establishment->name}}</td>
                <td>{{$establishment->city}}</td>
                <td>{{$establishment->address}}</td>
                <td>{{$room->occupancy}}</td>
                <td>{{$room->price}}</td>
                <td>
                    <a href="{{ route('room.edit', ['id' => $room->id]) }}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('room.softdelete', ['id' => $room->id]) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app>
