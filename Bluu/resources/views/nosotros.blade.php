@extends('plantilla')

@section ('seccion')
<h1>Nosotros</h1>
<a href=" "></a>
<?php //asignacion del array equipo al item lo recorre y muestra como {item} ?>

@foreach($equipo as $item)
 <a href="{{route('nosotros')}}" class="h4 text-danger"> {{$item}}</a> <br>
    @endforeach
    <?php //revisa si la variable es vacia solo cuando se escribe el nombre en la ruta ?>
 @if(!empty($nombre))
    @switch($nombre)
        @case($nombre=='ignacio')
        <?php // mt= margen top ?>
        <h2 class="mt-5" >El nombre es {{$nombre}}:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quod explicabo natus perspiciatis consequuntur nesciunt perferendis deserunt itaque harum? Repellendus minus asperiores laboriosam nihil, amet dignissimos velit animi facere explicabo.</p>
        @break

        @case($nombre =='juanito')
        <h2 class="mt-5" >El nombre es {{$nombre}}:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quod explicabo natus perspiciatis consequuntur nesciunt perferendis deserunt itaque harum? Repellendus minus asperiores laboriosam nihil, amet dignissimos velit animi facere explicabo.</p>
        @break

        @case($nombre =='pedrito')
        <h2 class="mt-5" >El nombre es {{$nombre}}:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quod explicabo natus perspiciatis consequuntur nesciunt perferendis deserunt itaque harum? Repellendus minus asperiores laboriosam nihil, amet dignissimos velit animi facere explicabo.</p>
        @break

        @case($nombre =='joaquin')
        <h2 class="mt-5" >El nombre es {{$nombre}}:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quod explicabo natus perspiciatis consequuntur nesciunt perferendis deserunt itaque harum? Repellendus minus asperiores laboriosam nihil, amet dignissimos velit animi facere explicabo.</p>
        @break
    @endswitch
 <p>La variable si existe</p>
 @endif
@endsection