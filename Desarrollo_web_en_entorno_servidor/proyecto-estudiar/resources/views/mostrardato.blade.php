<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @forelse ($datos as $item)
<li>
{{$item->nombre}} {{$item->descripcion}}

     <a href="{{ route('editar', $item->id)}}" >Edit</a> <!--añadimos también EDITAR-->
     <form action="{{ route('borrar', $item->id)}}" method="post"> <!--añadimos también BORRAR-->
        @csrf
        @method('DELETE')
        <button type="submit">borrar</button>
    </form>
</li>
@empty
   <li>NO HAY NADA </li>
@endforelse


</body>
</html>
