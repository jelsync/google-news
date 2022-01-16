Crear noticia

<form action="{{url('/noticia')}}" method="post" enctype="multipart/form-data">
@csrf
    <label for="TituloNoticia">Titulo de la Noticia</label>
    <input type="text" name="TituloNoticia">
    <br>
    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion">
    <br>
    <label for="Enlace">Enlace</label>
    <input type="text" name="Enlace">
    <br>
    <input type="submit" value="Crear Noticia">

</form>