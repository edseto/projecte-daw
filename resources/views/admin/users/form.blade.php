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
    <form action="{{ $user->id != null ? route('users.update') : route('users.store') }}" method="post">
    
    @csrf
    <input name="id" id="id" type="hidden" value="{{ $user->id }}">
    
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="username">Nom d'usuari</label>
                    <input class="form-control" name="username" id="username" aria-label="Nom d'usuari" type="text" value="{{$user->username}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="password">Contrassenya</label>
                    <input class="form-control" name="password" id="password" aria-label="Contrassenya" type="password" {{$readonly}} />
                </div>
                <div class="col-4">
                    <select class="form-control" name="role" id="role" {{$readonly}}>
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
                    <input class="form-control" name="name" id="name" type="text" aria-label="Nom complet" value="{{$user->name}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="nif">NIF/NIE/CIF</label>
                    <input class="form-control" name="nif" id="nif" type="text" aria-label="NIF/NIE/CIF" value="{{$user->nif}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <!-- TODO: Incloure foto i adjuntable de foto -->
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="city">Població</label>
                    <input class="form-control" name="city" id="city" type="text" aria-label="Població" value="{{$user->city}}" {{$readonly}}/>
                </div>
                <div class="col-2">
                    <label for="postal_code">Codi postal</label>
                    <input class="form-control" name="postal_code" id="postal_code" type="text" aria-label="Codi postal" value="{{$user->postal_code}}" {{$readonly}} />
                </div>
                <div class="col-6">
                    <label for="address">Adreça</label>
                    <input class="form-control" name="address" id="address" type="text" aria-label="Adreça" value="{{$user->address}}" {{$readonly}} />
                </div>
            </div>

            @if($readonly == null)
            <button class="btn btn-primary" type="submit">Guardar</button>
            @endif

            <a href="{{ route('admin.users') }}" class="btn btn-secondary" >Enrere</a>
        </div>
    </form>
</x-app>
