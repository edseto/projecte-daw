<x-app>
    <h1>Dashboard de l'administrador</h1>

    <a href="{{ route('admin.users') }}" class="btn btn-primary">Administració d'usuaris</a>
    <a href="{{ route('admin.establishments') }}" class="btn btn-secondary">Administració d'edificis</a>
    <a href="{{ route('admin.rooms') }}" class="btn btn-secondary">Administració d'habitacions</a>
</x-app>
