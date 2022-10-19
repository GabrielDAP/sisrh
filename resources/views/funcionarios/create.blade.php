@extends('layouts.default')

@section('title','Cadastrar Funcionário')


@section('conteudo')
    <body class="bg-light">
        <div class="container border border-2 rounded-4 p-4 bg-white mb-5" style="max-width: 1200px;">
            <form method="POST">
                <h1 class="mb-4">Cadastrar Funcionário</h1>
                <div class="row">
                    <div class="mb-3 col-sm-4">
                        <label for="nome" class="form-label fw-bold">Nome:</label>
                        <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="telefone" class="form-label fw-bold">Data:</label>
                        <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="sexo" class="form-label fw-bold">Sexo:</label>
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected> </option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Prefiro não declarar</option>
                          </select>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="cpf" class="form-label fw-bold">CPF:</label>
                        <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="" required minlength="11" maxlength="11">
                    </div>
                    
                    <div class="mb-3 col-sm-4">
                        <label for="email" class="form-label fw-bold">Email:</label>
                        <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="telefone" class="form-label fw-bold">Telefone:</label>
                        <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required placeholder="(DDD) XXXXX-XXXX">
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="departamento" class="form-label fw-bold">Departamento:</label>
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected> </option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Prefiro não declarar</option>
                          </select>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="cargo" class="form-label fw-bold">Cargo:</label>
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option selected> </option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Prefiro não declarar</option>
                          </select>
                    </div>

                    <div class="mb-3 col-sm-4">
                        <label for="telefone" class="form-label fw-bold">Salário:</label>
                        <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required placeholder="R$">
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label fw-bold">Foto:</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
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