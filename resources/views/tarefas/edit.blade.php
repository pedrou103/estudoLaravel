@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Edição de tarefas</h1>

    @if (session('warning'))
        {{session('warning')}}
    @endif

    <form method="post">
        @csrf
        <label>
            Titulo: <br/>
            <input type="text" name="title" value="{{ $data->title }}">
        </label>
        <br/>
        <input type="submit" value="Salvar" />
    </form>
@endsection