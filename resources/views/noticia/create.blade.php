<form action="{{url('/noticia')}}" method="post" enctype="multipart/form-data">
@csrf
@include('noticia.form', ['modo'=>'Crear'])
</form>