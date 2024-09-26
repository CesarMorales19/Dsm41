<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index(): View
    {
        $usuarios = Usuario::all();
        $a = "Llegas a la función";
        Log::emergency($a);
        Log::alert($a);
        Log::critical($a);
        Log::error($a);
        Log::warning($a);
        Log::notice($a);
        Log::info($a);
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(): View
    {
        return view('usuarios.create');
    }

    public function store(StoreUsuarioRequest $request)
    {
        // Lógica para almacenar un nuevo usuario
    }

    public function show(Usuario $usuario): View
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario): View
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        // Lógica para actualizar el usuario
    }

    public function destroy(Usuario $usuario)
    {
        // Lógica para eliminar el usuario
    }

    public function function1(): void 
    {
    }

    public function function2(): void 
    {
    }
}
