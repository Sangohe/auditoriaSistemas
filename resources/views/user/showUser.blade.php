@extends('user.navbar')

@section('showUser')
    <div class="container">
        <div class="row containt-fluid">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-img-top">
                        <img src="{{asset('storage/images.jpeg')}}" alt="">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small class="text-muted">Nombre:</small>
                            <div>{{$user->name}}</div>
                        </li>
                        <li class="list-group-item">
                        <small class="text-muted">Correo:</small>
                            <div>{{$user->email}}</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection