@extends('layout.basic_layout')


@section('cabecalho')
    @parent
    @foreach ($equipe as $e)
                        <h2> {{$e}} </h2> 
    @endforeach
@stop

@section('rodape')
    @parent
@stop
