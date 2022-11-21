<x-app>
    <h1>Inicia sessió</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('signin') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="username">Nom d'usuari</label>
                    <input class="form-control" name="username" id="username" aria-label="Nom d'usuari" type="text" value="" />
                </div>
                <div class="col-4">
                    <label for="password">Contrassenya</label>
                    <input class="form-control" name="password" id="password" aria-label="Contrassenya" type="password" />
                </div>
            </div>            

            <button class="btn btn-primary" type="submit">Entra</button>
            <a href="/" class="btn btn-secondary" >Enrere</a>
        </div>
    </form>
</x-app>