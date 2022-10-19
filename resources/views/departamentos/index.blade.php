@extends('layouts.default')

@section('title','Departamentos')


@section('conteudo')
    <h1>Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
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