@foreach ($preguntas as $pregunta) {{$pregunta->texto}}
<ul>
   @foreach ($respuestas_ofrecidas as $respuesta_ofrecida)
   <li>{{$respuesta_ofrecida->texto}}</li>
   @endforeach
</ul>
@endforeach