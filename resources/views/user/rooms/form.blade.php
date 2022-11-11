<x-app>
    <h1 >Formulari alta d'una habitació</h1>
    <form class="c-form" action="{{ route('room.create') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="name" class="font-weight-bold">Nom Habitació</label>
                    <input class="form-control c-input" id="name" aria-label="Nom Habitació" name="name" type="text" value="" />
                </div>
                <div class="col-6">
                    <label for="establishment">Establiment</label>
                    <select class="form-control c-input c-select" name="establishment" aria-label="Establiment" id="establishment">
                        @foreach(getEstablishments() as $establishment)
                            <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="address">Adreça</label>
                    <input class="form-control c-input" name="address" type="text" aria-label="Adreça" id="address" value=""/>
                </div>
                <div class="col-6">
                    <label for="photo">Imatge de l'habitació</label>
                    <input type="file" class="form-control-file c-input" id="photo" name="photo" aria-label="Imatge de l'habitació">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="occupancy">Capacitat</label>
                    <input class="form-control c-input" name="occupancy" id="occupancy" aria-label="Capacitat" type="number" value="" />
                </div>
                <div class="col-6">
                    <label for="price">Preu</label>
                    <input class="form-control c-input" name="price" type="text" id="price" aria-label="Preu" value="" />
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="description">Descripció</label>
                    <textarea class="form-control c-input" name="description" id="description" aria-label="Descripció" cols="55" rows="5"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="comments">Comentaris</label>
                    <textarea class="form-control c-input" name="comments" id="comments" aria-label="Comentaris" cols="55" rows="5"></textarea>
                </div>
            </div>


            <button aria-label="Guardar" class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</x-app>
