@extends('user.navbar')

@section('showUser')
    <div class="container">
        <div class="row containt-fluid">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{storage('images.jpeg')}}" alt="">
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection