<x-app>
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                @foreach($rooms as $room)
                <div class="col mb-4">
                    <div class="card"> <img src="{{ $room->photo }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-dark">{{ $room->price }}&euro;</span> <span class="float-end small text-muted">Barcelona</span> </div>
                            <h5 class="card-title">{{ $room->name }}</h5>
                            <div class="cart-text">{{ $room->description }}</div>
                            <div class="d-grid gap-2 my-4"> <a href="{{ route('room.show', ['id' => $room->id]) }}" class="btn btn-success">Reserva ara</a> </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</x-app>