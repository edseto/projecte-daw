<x-app>
    <h1>Formulari d'edició d'usuaris</h1>
    <form action="update" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="username">Nom d'usuari</label>
                    <input name="username" type="text" value="{{$user->username}}" {{$readonly}} />
                </div>
                <div class="col-4">
                    <label for="password">Contrassenya</label>
                    <input name="password" type="password" {{$readonly}} />
                </div>
                <div class="col-4" style="visibility:collapse;">
                    <label for="confirm_password">Contrassenya</label>
                    <input name="confirm_password" type="password" {{$readonly}} />
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="name">Nom complet</label>
                    <input name="name" type="text" value="{{$user->name}}" {{$readonly}}/>
                </div>
                <div class="col-4">
                    <label for="nif">NIF/NIE/CIF</label>
                    <input name="nif" type="text"  value="{{$user->nif}}" {{$readonly}}/>
                </div>
                <div class="col-4">
                    <!-- TODO: Incloure foto i adjuntable de foto -->
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="city">Població</label>
                    <input name="city" type="text"  value="{{$user->city}}" {{$readonly}}/>
                </div>
                <div class="col-2">
                    <label for="postal_code">Codi postal</label>
                    <input name="postal_code" type="text"  value="{{$user->postal_code}}" {{$readonly}} />
                </div>
                <div class="col-6">
                    <label for="address">Adreça</label>
                    <input name="address" type="text"  value="{{$user->address}}" {{$readonly}} />
                </div>
            </div>

            @if(isset($readonly))
            <button class="btn btn-primary" type="submit">Guardar</button>
            @endif

            <a href="#" class="btn btn-secondary" >Enrere</a>
        </div>
    </form>
</x-app>
