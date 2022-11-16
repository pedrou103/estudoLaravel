@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    
<h1>aaaaaaaaaaaa</h1>

<!-- GET -->
<!-- <form method="GET">
    Nome:<br/>
    <input type="text" name="nome"><br/>
    Idade:<br/>
    <input type="text" name="idade"><br/>
    Cidade:<br/>
    <input type="text" name="cidade"><br/>
    
    <input type="submit" value="Enviar">
</form> -->

<!-- POST -->
<form method="POST">
    <!-- O token foi criado nessa linha abaixo -->
    @csrf 

    Nome:<br/>
    <input type="text" name="nome"><br/>
    Idade:<br/>
    <input type="text" name="idade"><br/>
    Cidade:<br/>
    <input type="text" name="cidade"><br/>

    <input type="submit" value="Enviar">
</form>

nome é: {{ $nome }}. Tenho {{ $idade }} anos.<br/> Versão: {{$versao}}

@endsection