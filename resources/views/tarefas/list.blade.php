@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Listagem</h1>

    {{-- <a href="{{url('/tarefas/add')}}">Adicionar nova Tarefa</a> --}}
    <a href="{{ route('tarefas.add') }}">Adicionar nova Tarefa</a>

    @if (count($list) > 0)
        <ul>
        @foreach ($list as $item)
            <li>
                <a href="{{ route('tarefas.done', ['id'=>$item->id]) }}">[
                    @if($item->resolvido === 1)
                        desmarcar
                    @else
                        marcar
                    @endif
                ]</a>
                {{ $item->title }}
                <a href="{{ route('tarefas.edit', ['id'=>$item->id]) }}">[editar]</a>
                <a href="{{ route('tarefas.del', ['id'=>$item->id]) }}">[excluir]</a>
            </li>
        @endforeach
        </ul>
    @else
        Não há itens a serem listados
    @endif

@endsection
