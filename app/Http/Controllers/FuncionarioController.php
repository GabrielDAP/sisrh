<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(){
        return view('funcionarios.index');
    }

    public function create(){
        return view('funcionarios.create');
    }
}
