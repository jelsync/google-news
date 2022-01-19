<!doctype html>
    <head>
      <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="mt-2">
            <h1>{{$modo}}</h1>
          </div>
          @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                <li>
                  {{$error}}
                </li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="form-group">
            <label for="TituloNoticia">Titulo de la Noticia</label>
            <input type="text" class="form-control" value="{{isset ($noticia->TituloNoticia)? $noticia->TituloNoticia:''}}" name="TituloNoticia">
          </div>
          <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" class="form-control" value="{{isset ($noticia->Descripcion) ?$noticia->Descripcion:''}}" name="Descripcion">
          </div>
          <div class="form-group">
            <label for="Enlace">Enlace</label>
            <input type="text" class="form-control" value="{{isset ($noticia->Enlace)?$noticia->Enlace:''}}" name="Enlace">
          </div>
          <div class="mt-2">
            <input type="submit" class="btn btn-success" value="{{$modo}}">
            <a href="{{url('noticia/')}}" class="btn btn-primary">Atras</a> 
          </div>
       </div>
      </div>
    </body>
</html>