@extends('user.navbar')

@section('content')
    <div class="container">
        <div class="row containt-fluid">
            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="card">
                    <img class="card-img-top" src="{{asset('storage/images.jpeg')}}" alt="">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small class="text-muted">Name:</small>
                            <div>{{$user->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted">Email:</small>
                            <div>{{$user->email}}</div>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <a href="{{route('user.form')}}" class="btn btn-danger mt-3">Change password</a>
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning mt-3">Edit profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection