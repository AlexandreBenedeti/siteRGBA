@extends('layout.basic_layout')


@section('cabecalho')
    @parent
    @foreach ($equipe as $e)
                        <h2> {{$e}} </h2> 
    @endforeach
@stop

@section('corpo')

@stop

@section('rodape')
    @parent
@stop
