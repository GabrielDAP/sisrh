@extends('layouts.default')

@section('title','Funcionários')


@section('conteudo')
    <h1>Funcionários</h1>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr>
                <td class="align-middle">{{ $funcionario->id }}</td>
                <td class="align-middle"><img src="/images/funcionarios/{{ $funcionario->foto }}" alt="{{ $funcionario->nome }}" width="100"></td>
                <td class="align-middle">{{ $funcionario->nome }}</td>
                <td class="align-middle">{{ $funcionario->cargo->descricao }}</td>
                <td class="align-middle">{{ $funcionario->departamento->nome }}</td>
                <td class="align-middle">
                    <a href="#" class="btn btn-primary mb-2 fs-8"><i class="bi bi-pen"></i></a>
                    <a href="#" class="btn btn-danger mb-2 fs-8"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection