<x-app>
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="fluid img-thumbnail" src="https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/05/20152451/Mandarin-Oriental-Hong-Kong-3.jpg" alt="">
        </div>
        <div class="col-6">
            <h2>{{$room->name}}</h2>
            <h4>{{$room->price}} <span>/ dia</span></h4>
            <div>
                <h6>Adreça: <span>{{$room->address}}</span></h6>
                <h6>Capacitat: <span>{{$room->occupancy}} persones</span></h6>
                <h6>Descripció: <span>{{$room->description}}</span></h6>
                <h6>Comentaris: <span>{{$room->comments}}</span></h6>
            </div>
    </div>
</div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>        
</x-app> 