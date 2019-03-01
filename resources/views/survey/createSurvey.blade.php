@extends('user.navbar')

@section('content')
   <form action="{{route('survey.store')}}" method="POST">
      @csrf
      <div class="card">
         <div class="card-header">
            <h3 class="text-center">Encuesta redes de computadores</h3>
         </div>
         <ul class="list-group list-group-flush">
            @foreach ($preguntas as $pregunta)
               <li class="list-group-item pb-4">
                  <h5 class="m-3">
                     {{$pregunta->texto}}
                  </h5>
                  <!-- <div id="{{$pregunta->id_pregunta}}p"> -->
                     @foreach ($respuestas_ofrecidas as $respuesta_ofrecida)
                        <div class="custom-control custom-radio m-1 ml-4">
                           <input type="radio" id="{{$respuesta_ofrecida->id_respuesta_ofrecida}}p{{$pregunta->id_pregunta}}" value="{{$respuesta_ofrecida->id_respuesta_ofrecida}}" name="{{$pregunta->id_pregunta}}" class="custom-control-input">
                           <label class="custom-control-label" for="{{$respuesta_ofrecida->id_respuesta_ofrecida}}p{{$pregunta->id_pregunta}}">{{$respuesta_ofrecida->texto}}</label>
                        </div>
                     @endforeach
                  <!-- </div> -->
               </li>
            @endforeach
         </ul>
         <div class="float-right m-2">
            <button type="submit" class="btn btn-success form-control">Submit</button>
         </div>
      </div>
   </form>
@endsection