@php
    echo "estudiante";
@endphp
@auth    <!--sirve para mostrar en caso de estar autentificado, estar logeado-->
{{auth()->user()->name}}
@endauth
