@extends('layouts.default')

@section('title','Departamentos')


@section('conteudo')
    <h1>Departamentos</h1>
        <div class="table-responsive">
            <a href="{{ route('departamentos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Descrição</th>
                        <th width = "160">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departamentos as $departamento)
                    <tr class="text-center">
                        <td class="align-middle">{{ $departamento->id }}</td>
                        <td class="align-middle">{{ $departamento->nome }}</td>
                        <td class="align-middle">
                            <a href="#" class="btn btn-success mb-2 fs-8"><i class="bi bi-person"></i></a>
                            <a href="#" class="btn btn-primary mb-2 fs-8"><i class="bi bi-pen"></i></a>
                            <a href="#" class="btn btn-danger mb-2 fs-8"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
@endsection