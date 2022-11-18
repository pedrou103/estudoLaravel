@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Adição</h1>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            {{$error }}<br/>
        @endforeach
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