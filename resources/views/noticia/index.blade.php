<!doctype html>
<head>
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>

<a href="{{url('noticia/create')}}" class="btn btn-success">Crear una nueva noticia</a>

@foreach($noticias as $noticia)
<div class="d-flex justify-content-center">
  <div class="card mb-3 " style="max-width: 740px;">
    <div class="row g-0">
      <!-- <div class="d-flex"></div> -->
      <!-- <div class="p-2">Flex item</div> -->
      <!-- <div class="p-2">Flex item</div> -->
      <!-- <div class="ml-auto p-2">Flex item</div> -->
      <div class="d-flex justify-content-end">
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-md-9">
        <div class="m-2">
          <h5 class="card-title">{{$noticia->TituloNoticia}}</h5>
          <p class="card-text">{{$noticia->Descripcion}}</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="col-md-3 mh-100">
      <!-- <div class="col-md-3 mh-100" style="width: 150px; height: 100px; background-color: rgba(0,0,255,0.1);"> -->
        <img src="{{$noticia->Enlace}}" class="img-fluid rounded" alt="..." style="width: 150px; height: 100px; mb-2">
        <!-- <img src="{{$noticia->Enlace}}" class="img-fluid rounded " alt="..."> -->
      </div>
      <a href="{{url('/noticia/'.$noticia->id.'/edit')}}" class="btn btn-primary">Editar</a>
      <form action="{{url('/noticia/'.$noticia->id)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">
      </form>
    </div>
  </div>
</div>
@endforeach
<!-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> -->
    </body>
</html>