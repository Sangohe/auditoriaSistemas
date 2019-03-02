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
                <a href="{{route('survey.create')}}" class="btn btn-success mt-3">Survey</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-7">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-check-square fa-3x"></i></h5>
                        <p class="card-text">Usted ha contestado {{$contador[0]}} preguntas como realizado</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="far fa-times-circle fa-3x"></i></h5>
                        <p class="card-text">Usted ha contestado {{$contador[1]}} preguntas como no realizado</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-user-times fa-3x"></i></h5>
                        <p class="card-text">Usted ha contestado {{$contador[2]}} preguntas como no necesario</p>
                    </div>
                </div>
            </div>
            <div class="card-group mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-check-square fa-3x"></i></h5>
                        <p class="card-text">Los usuarios han contestado {{$contador[3]}} preguntas como realizado</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="far fa-times-circle fa-3x"></i></h5>
                        <p class="card-text">Los usuarios han contestado {{$contador[4]}} preguntas como no realizado</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align='center'><i class="fas fa-user-times fa-3x"></i></h5>
                        <p class="card-text">Los usuarios han contestado {{$contador[5]}} preguntas como no necesario</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection