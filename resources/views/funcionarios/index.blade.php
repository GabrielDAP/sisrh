@extends('layouts.default')

@section('title','Funcionários')


@section('conteudo')
    <h1>Funcionários</h1>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Função</th>
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