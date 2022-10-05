@extends('layouts.default')

@section('title','Funcionários')


@section('conteudo')
    <h1>Funcionários</h1>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Edemilton</td>
                <td>Professor</td>
                <td>Sistema de Informação</td>
                <td></td>
            </tr>
        </tbody>

    </table>
@endsection