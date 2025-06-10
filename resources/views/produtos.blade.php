@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>PRODUTOS</h1>

@if (!empty($busca))

<p>O usuário está buscando por: {{  $busca  }} </p>

@endif

@endsection