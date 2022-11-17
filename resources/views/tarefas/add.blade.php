@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Adição</h1>

    @if (session('warning'))
        {{session('warning')}}
    @endif

    <form method="post">
        @csrf
        <label>
            Titulo: <br/>
            <input type="text" name="title">
        </label>
        <br/>
        <input type="submit" value="Adicionar" />
    </form>
@endsection