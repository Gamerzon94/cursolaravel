@extends('layout')
@section('contenido')
<h1>Saludos {{$nombre}} </h1>
{{$html}}
{!! $html !!}
<ul>
@foreach ($consolas as $consola)
    <li>{{$consola}}</li>
@endforeach
</ul>
<ul>
@forelse ($celulares as $celular)
    <li>{{$celular}}</li>
@empty
    <li>No hay datos de celulares</li>
@endforelse
</ul>
@if(count($consolas)===1)
<p>Solo tienes una consola</p>
@elseif(count($consolas)>1)
<p>Tienes varias consolas</p>
@else
<p>No tienes consolas</p>
@endif
@stop