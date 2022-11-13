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

    <form class="c-form" action="{{ $room->id !== null ? route('room.update') : route('room.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input name="id" type="hidden" value="{{ $room->id }}">

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="name">Nom Habitació</label>
                    <input class="form-control c-input" id="name" aria-label="Nom Habitació" name="name" type="text" value="{{ $room->name }}" />
                </div>
                <div class="col-6">
                    <label for="establishment">Establiment</label>
                    <select class="form-control c-input c-select" name="establishment" aria-label="Establiment" id="establishment">
                        @foreach(getEstablishments() as $establishment)
                            <option value="{{ $establishment->id }}" {{ $establishment->id === $room->establishment_id ? 'selected' : '' }}>{{ $establishment->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="address">Adreça</label>
                    <input class="form-control c-input" name="address" type="text" aria-label="Adreça" id="address" value="{{ $room->address }}"/>
                </div>
                <div class="col-6">
                    <label for="photo">Imatge de l'habitació</label>
                    <input type="file" class="form-control-file c-input" id="photo" name="photo" aria-label="Imatge de l'habitació">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="occupancy">Capacitat</label>
                    <input class="form-control c-input" name="occupancy" id="occupancy" aria-label="Capacitat" type="number" value="{{ $room->occupancy }}" />
                </div>
                <div class="col-6">
                    <label for="price">Preu</label>
                    <input class="form-control c-input" name="price" type="text" id="price" aria-label="Preu" value="{{ $room->price }}" />
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="description">Descripció</label>
                    <textarea class="form-control c-input" name="description" id="description" aria-label="Descripció" cols="55" rows="5">{{ $room->description }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="comments">Comentaris</label>
                    <textarea class="form-control c-input" name="comments" id="comments" aria-label="Comentaris" cols="55" rows="5">{{ $room->comments }}</textarea>
                </div>
            </div>

            <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-disk"></i> Guardar</button>
            
            <a href="{{ route('admin.users') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Enrere</a>
        </div>
    </form>
</x-app>
