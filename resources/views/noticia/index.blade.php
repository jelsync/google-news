Lista de noticias
@foreach($noticias as $noticia)
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$noticia->Enlace}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$noticia->TituloNoticia}}</h5>
        <p class="card-text">{{$noticia->Descripcion}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <a href="{{url('/noticia/'.$noticia->id.'/edit')}}" class="btn btn-primary">Editar</a>
    <form action="{{url('/noticia/'.$noticia->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">
    </form>
 
  </div>
</div>
@endforeach