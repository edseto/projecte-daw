<x-app>
    <?php
    if (isset($readonly))
    {
        $readonly = "readonly";
    } else {
        $readonly = null;
    }
    ?>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Formulari d'edició d'usuaris</h1>
    <form class="c-form" action="{{ $user->id !== null ? route('users.update') : route('users.store') }}" method="post">

        @csrf
        <input name="id" id="id" type="hidden" value="{{ $user->id }}">

        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="username">Nom d'usuari</label>
                    <input class="form-control c-input" name="username" id="username" aria-label="Nom d'usuari" type="text" value="{{$user->username}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="password">Contrassenya</label>
                    <input class="form-control c-input" name="password" id="password" aria-label="Contrassenya" type="password" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="role">Rol</label>
                    <select class="form-control c-input c-select" name="role" id="role" {{$readonly}}>
                        <option value="800" <?= $user->role == 800 ? 'selected' : '' ?>>Administrador</option>
                        <option value="700" <?= $user->role == 700 ? 'selected' : '' ?>>Llogater</option>
                        <option value="600" <?= $user->role == 600 || $user->role == null ? 'selected' : '' ?>>Client</option>
                    </select>
                </div>
                <!--<div class="col-4" style="visibility:collapse;">
                    <label for="confirm_password">Repeteix la contrassenya</label>
                    <input class="form-control" name="confirm_password" id="confirm_password" aria-label="Repeteix la contrassenya" type="password" {{$readonly}} />
                </div>-->
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="name">Nom complet</label>
                    <input class="form-control c-input" name="name" id="name" type="text" aria-label="Nom complet" value="{{$user->name}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="nif">NIF/NIE/CIF</label>
                    <input class="form-control c-input" name="nif" id="nif" type="text" aria-label="NIF/NIE/CIF" value="{{$user->nif}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <!-- TODO: Incloure foto i adjuntable de foto -->
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="city">Població</label>
                    <input class="form-control c-input" name="city" id="city" type="text" aria-label="Població" value="{{$user->city}}" {{$readonly}}/>
                </div>
                <div class="col-2">
                    <label for="postal_code">Codi postal</label>
                    <input class="form-control c-input" name="postal_code" id="postal_code" type="text" aria-label="Codi postal" value="{{$user->postal_code}}" {{$readonly}} />
                </div>
                <div class="col-6">
                    <label for="address">Adreça</label>
                    <input class="form-control c-input" name="address" id="address" type="text" aria-label="Adreça" value="{{$user->address}}" {{$readonly}} />
                </div>
            </div>

            @if($readonly == null)
            <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-disk"></i> Guardar</button>
            @endif

            <a href="{{ route('admin.users') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Enrere</a>
        </div>
    </form>

        <h2>Habitacions gestionades per l'usuari</h2>
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
                <th> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms[0]->rooms as $room)
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
                        <a href="{{ route('room.show', ['id' => $room->id]) }}">Detalls</a>
                    </td>
                    <td>
                        <a href="{{ route('room.edit', ['id' => $room->id]) }}">Editar</a>
                    </td>
                    <td>
                        <a class="btn_delete" href="{{ route('room.delete', ['id' => $room->id]) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Reservas -->
        <h2>Habitacions reservades per l'usuari</h2>
        <table class="table table-light">
            <thead>
            <tr>
                <th></th>
                <th>Habitació</th>
                <th>Data</th>
                <th>Persones</th>
                <th>Preu</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->bookings()->get() as $booking)
                <tr>
                    <td></td>
                    <td>{{$booking->room_id}}</td>
                    <td>{{$booking->date_booking}}</td>
                    <td>{{$booking->people_amount}}</td>
                    <td>{{$booking->total_price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

</x-app>
