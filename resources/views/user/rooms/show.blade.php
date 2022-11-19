<x-app>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        /*$('#datepicker').DatePicker({
            format: "dd/mm/yyyy",
            language: "es",
        });*/

        $('#book').on("click", function(){ $('#div-form').show(); $("#book").hide(); });
    </script>

    <div class="container">
        <div class="row">
            <div class="col-6">
                @if(strlen($room->photo) > 0)
                <img class="fluid img-thumbnail" src="{{ asset('assets/img/about/' . $room->photo) }}" alt="{{ $room->photo }}">
                @else
                <img class="fluid img-thumbnail" src="https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/05/20152451/Mandarin-Oriental-Hong-Kong-3.jpg" alt="">
                @endif
                <p><span class="badge badge-dark">Llogater: {{ $room->user->name }} </span> (<a href="mailto:{{ $room->user->username }}">{{ $room->user->username }}</a>)</p>
            </div>
            <div class="col-6">
                <h2><b>{{$room->name}}</b> <span>{{$room->establishment->name }}</span></h2>
                <h4><b>{{$room->price}}€</b> <span>/ dia</span></h4>
                <hr />
                <div>
                    <h6><b>Localitat:</b> <span>{{$room->establishment->postal_code }} -</span> <span>{{$room->establishment->city }}</span></h6>
                    <h6><b>Adreça:</b> <span>{{$room->establishment->address }},</span> <span>{{$room->address}}</span></h6>
                    <h6><b>Capacitat:</b> <span>{{$room->occupancy}} persones</span></h6>
                    <h6><b>Descripció:</b> <span>{{$room->description}}</span></h6>
                    @if($room->roomServices != null)
                    <h6 style="display:inline;"><b>Serveis:</b></h6>
                    <p style="display:inline;">
                        @foreach($room->roomServices as $rhs)
                            <span class="badge badge-info">{{$rhs->service->name}}</span> 
                        @endforeach
                    </p>
                    @endif
                    <h6><b>Comentaris:</b> <span>{{$room->comments}}</span></h6>
                    <br />
                    @if(auth()->user() != null)
                        <button id="book" class="btn btn-primary btn-block">Reserva</button><!-- TODO: Mostrar calendari amb els dies reservats bloquejats -->
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-block">Reserva</a><!-- TODO: Enviar enllaç a formulari login -->
                    @endif
                </div>
            </div>
            <div id="div-form" class="col-12" style="display:none;">
                <hr />
                <form action="">
                    <label for="datepicker">Escull el dia / dies</label>
                    <input type="text" name="datepicker" id="datepicker" class="form-control" /> <!--TODO: Fer datepicker -->
                    <button type="submit" class="btn btn-success btn-block">Fes la reserva</button>
                </form>
            </div>
        </div>
    </div>
</x-app> 