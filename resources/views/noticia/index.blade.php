<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>GOOGLE NEWS</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-1">
        <nav class="navbar navbar-brand navbar-light">
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <a class="nav-link font-weight-light"  style="font-size: small;" href="https://news.google.com/topstories?hl=es-419&gl=US&ceid=US%3Aes-419">
                <li class="fas fa-globe "></li>
                Noticias destacadas</a>
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://news.google.com/foryou?hl=es-419&gl=US&ceid=US%3Aes-419"> <i class="far fa-star"></i> Para ti </a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://news.google.com/my/library?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="fas fa-fan"></i> Siguiendo </a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://news.google.com/my/library?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="fas fa-search"></i> Busquedas guardadas</a>
              </li>
            </ul>
            <hr>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://play.google.com/store/apps/details?id=com.google.android.apps.magazines&referrer=news.google.com?utm_source=web&utm_medium=menu&utm_campaign=side_menu_promotion">Descarga la app para android <i class="fas fa-external-link"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://apps.apple.com/us/app/apple-store/id459182288?l=es-419">Descarga la app para iOS <i class="fas fa-external-link"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-light"  style="font-size: small;" href="https://support.google.com/googlenews?p=web&hl=es-419&authuser=0#topic=7688381">Ayuda <i class="fas fa-external-link"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-2 d-flex">
        <div class="mt-3">
          <span style="content: url(https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg);
        display: inline-block;
        height: 24px;
        width: 74px;">
          </span>
        </div>
        <div class="mt-3">
          <span>Noticias</span>
        </div>
      </div>
      <div class="col-5 text-center mt-2">
         <input class="form-control" type="search" placeholder="Busca temas, ubicaciones y fuentes" aria-label="Search">
      </div>
      <div class="col-4 text-right">
        <button type="button" class="btn btn-link" style="color: rgb(75, 74, 74);">
          <i class="fas fa-th"></i>
        </button>
          <a href="{{url('noticia/create')}}" class="btn btn-link" style="color: black;">
            <i class="fas fa-plus-circle" style="font-size: 1.9em;"></i>
          </a>
        </button>
      </div>
    </div>
  </div>
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
          <div class="w-100" style="max-width: 840px;">
            <h4>Titulares</h4>
          </div>
      </div>
      <div class="col-12 d-flex justify-content-center">
          <div class="card w-100" style="max-width: 840px;">
            <div class="card-body">
              <a href="https://www.elheraldo.hn/pais/1509711-466/omicron-presion-hospitales-aumento-muertes-sospechosas">Noticias sobre el covid-19.</a>
              Mira la covertura mas grande sobre noticias del covid 19.
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach($noticias as $noticia)
      <div class="col-12 d-flex justify-content-center mt-4">
          <div class="card mb-3 w-100" style="max-width: 840px;">
            <div class="row g-0">
              <div class="col-9">
                <div class="card-body">
                  <h5 class="card-title">{{$noticia->TituloNoticia}}</h5>
                  <p class="card-text ml-3">{{$noticia->Descripcion}}</p>
                  <p class="card-text"><small class="text-muted">Modificado : {{$noticia->updated_at ? $noticia->updated_at : 'Nunca'}}</small></p>
                    <div class="d-flex justify-content-start">
                      <div class="m-1">
                        <a href="{{url('/noticia/'.$noticia->id.'/edit')}}" class="btn btn-primary">Editar</a>
                      </div>
                      <div class="m-1">
                        <form action="{{url('/noticia/'.$noticia->id)}}" method="post">
                          @csrf
                          {{method_field('DELETE')}}
                          <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar" class="btn btn-danger">
                        </form>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-3 mt-3">
                <img src="{{$noticia->Enlace}}" class="img-fluid rounded" alt="..." style="width: 150px; height: 100px;">
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>