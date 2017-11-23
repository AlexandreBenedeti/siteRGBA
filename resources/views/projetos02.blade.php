@extends('layout.basic_layout')

@section('cabecalho')
    @parent
    
@stop

@section('corpo')
    @parent
    @include('inclus.proj01')
    @include('inclus.proj02')
@stop

@section('rodape')
    @parent
@stop

