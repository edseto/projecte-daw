<div class="c-rooms-filter">
    <div class="c-rooms-filter__title">Filtres:</div>
    <div class="c-rooms-filter__title fw-bold">Establiment:</div>
    <div class="btn-group btn-group-toggle" data-toogle="buttons">
        <x-checkbox
            id="all"
            name="shuffle-filter"
            value="all"
            label="Mostrar tots"
            class="active"
            checked
        />
        @foreach(getEstablishments() as $establishment)
            <x-checkbox
                id="e_{{ $establishment->id }}"
                name="shuffle-filter"
                value="e_{{ $establishment->id }}"
                :label="$establishment->name"
            />
        @endforeach
    </div>
</div>
