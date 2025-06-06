@extends('layouts.main')

@section('title', 'Coding Events')

@section('content')


<h1>titulo</h1>
<img src="/img/banner.jpg" alt="">
@if(5 > 10)
<p>A condição é true</p>
@endif
<p>{{ $nome }}</p>
@if($nome == "Pedro")
<p>O nome é pedro</p>
@elseif($nome == "Matheus")
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
@else
<p>O nome não é pedro</p>
@endif

@for ($i = 0; $i < count($vetor); $i++)
    <p>{{  $vetor[$i]  }} - {{  $i  }}</p>
@endfor

@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

@php
    $nome = "João";
    echo $nome;
@endphp

{{-- Comentário do Blade --}}

@endsection
