Editar noticia
<form action="{{url('/noticia/'.$noticia->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('noticia.form')
</form>
