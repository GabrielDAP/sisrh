@extends('layouts.default')

@section('title','Cargos')


@section('conteudo')
    <h1>Cargos</h1>
        <a href="{{ route('cargos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>

    </table>
@endsection