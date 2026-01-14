<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @dump($categorias)
        
    @forelse ($categorias as $categoria )
    {{$categoria->nombre}}

        <option value="{{$categoria->id}}">{{$categoria->nombre}} </option>


    @empty
    NO HAY INFORMACION
    @endforelse
    </select>
    <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
