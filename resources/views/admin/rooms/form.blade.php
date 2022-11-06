<x-app>
    <h1>Formulari d'edició d'una habitació</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ $room->id != null ? route('room.update') : route('room.store') }}" method="post">
        @csrf
        <input name="id" type="hidden" value="{{ $room->id }}">

        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="name">Nom Habitació</label>
                    <input class="form-control" id="name" aria-label="Nom Habitació" name="name" type="text" value="{{ $room->name }}" />
                </div>
                <div class="col-2">
                    <label for="establishment">Establiment</label>
                    <select class="form-control" name="establishment" aria-label="Establiment" id="establishment">
                        @foreach(getEstablishments() as $establishment)
                            <option value="{{ $establishment->id }}" {{ $establishment->id === $room->establishment_id ? 'selected' : '' }}>{{ $establishment->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="address">Adreça</label>
                    <input class="form-control" name="address" type="text" aria-label="Adreça" id="address" value="{{ $room->address }}"/>
                </div>
                <div class="col-2">
                    <label for="photo">Imatge de l'habitació</label>
                    <input type="file" class="form-control-file" id="photo" name="photo" aria-label="Imatge de l'habitació">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="occupancy">Capacitat</label>
                    <input class="form-control" name="occupancy" id="occupancy" aria-label="Capacitat" type="number" value="{{ $room->occupancy }}" />
                </div>
                <div class="col-2">
                    <label for="price">Preu</label>
                    <input class="form-control" name="price" type="text" id="price" aria-label="Preu" value="{{ $room->price }}" />
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="description">Descripció</label>
                    <textarea class="form-control" name="description" id="description" aria-label="Descripció" cols="55" rows="5">{{ $room->description }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="comments">Comentaris</label>
                    <textarea class="form-control" name="comments" id="comments" aria-label="Comentaris" cols="55" rows="5">{{ $room->comments }}</textarea>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>
            <a href="{{ route('admin.rooms') }}" class="btn btn-secondary" >Enrere</a>
        </div>
    </form>
</x-app>
