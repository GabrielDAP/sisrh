<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FuncionarioController extends Controller
{   //pasta da view

    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $funcionarios = Funcionario::where('nome', 'like', '%' .
            $request->buscaFuncionario . '%')->orderby('nome', 'asc')->paginate(3);  //variavel funcionario recebe select all da tabela funcionario    

        $totalFuncionarios = Funcionario::all()->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request)
    {
        $departamento = Departamento::find($id);

        $funcionarios = Funcionario::where('id_departamento', $id)
            ->where('nome', 'like', '%' . $request->buscaFuncionario . '%')
            ->orderby('nome', 'asc')->get();

        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios', 'departamento'));
    }

    public function create()
    {
        $departamentos = Departamento::all()->sortBy('nome');
        $cargos = Cargo::all()->sortBy('descricao');
        return view('funcionarios.create', compact('departamentos', 'cargos'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        if (!empty($input['foto'] && $input['foto']->isValid())) {
            $nomeArquivo = $input['foto']->hashName(); //obtem o hash do nome do arquivo
            $input['foto']->store('public/funcionarios'); //upload da foto em uma pasta
            $input['foto'] = $nomeArquivo; //guardar o nome do arquivo
        } else {
            $input['foto'] = null;
        }

        Funcionario::create($input);

        return redirect()->route('funcionarios.index')->with('Sucesso', 'Funcionario cadastrado com sucesso');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $departamentos = Departamento::all()->sortBy('nome');
        $cargos = Cargo::all()->sortBy('descricao');
        return view('funcionarios.edit', compact('funcionario', 'departamentos', 'cargos'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->toArray();
        $funcionario = Funcionario::find($id);

        if (!empty($input['foto']) && $input['foto']->isValid()) {
            Storage::delete('public/funcionarios/' . $funcionario['foto']);
            $nomeArquivo = $input['foto']->hashName(); //obtem o hash do nome do arquivo
            $input['foto']->store('public/funcionarios'); //upload da foto em uma pasta
            $input['foto'] = $nomeArquivo; //guardar o nome do arquivo
        }
        $funcionario->fill($input);
        $funcionario->save();
        return redirect()->route('funcionarios.index')->with('Sucesso', 'Funcionario cadastrado com sucesso');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        Storage::delete('public/funcionarios/'.$funcionario['foto']);
        $funcionario->delete();
        return redirect()->route('funcionarios.index')->with('Sucesso', 'Funcionario deletado com sucesso!');
    }
}