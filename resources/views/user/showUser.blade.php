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
        <div class="col-sm-12 col-md-6 col-lg-7">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-check-square fa-3x"></i></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="far fa-times-circle fa-3x"></i></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-user-times fa-3x"></i></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection