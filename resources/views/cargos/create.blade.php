@extends('layouts.default')

@section('title','Cadastrar Cargos')


@section('conteudo')
    <body class="bg-light">
        <div class="container border border-2 rounded-4 p-4 bg-white mb-5" style="max-width: 1200px;">
            <form method="POST">
                <h1 class="mb-4">Cadastrar Cargos</h1>
                <div class="row">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-bold">Nome:</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                    </div>

                    <div class="d-grid mb-4 col-sm-2">
                        <input type="button" value="Cadastrar" class="btn btn-outline-primary btn-lg">
                    </div>
    
                    <div class="d-grid mb-4 col-sm-2">
                        <input type="button" value="Cancelar" class="btn btn-outline-danger btn-lg">
                    </div>
                </div>
                
            </form>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
@endsection