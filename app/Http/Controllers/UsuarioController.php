<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsuarioController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        Gate::authorize('acessar-usuarios');
        $usuarios =User::all()->sortBy('name');
        return view('usuarios.index', compact('usuarios'));        
    }

    public function create ()
    {
        return view ('usuarios.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->route('usuarios.index')->with('sucesso', 'Usuario cadastrado com sucesso');
    }
}