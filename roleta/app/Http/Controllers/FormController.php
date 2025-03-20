<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\FormRolete;



class FormController extends Controller
{
    public function atualizar(Request $request) {
        
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'placa' => 'required|string',
            'email' => 'required|email|unique:LeadsRoletas,email',
            'tel' => 'required|string',
            'ppv' => 'required|string|max:5'
        ], [
            'email.unique' => 'Esse usuário já realizou sua tentativa!',
        ]);

        FormRolete::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'placa' => $request->placa,
            'email' => $request->email,
            'tel' => $request->tel,
            'ppv' => $request->ppv,
        ]);

        return view('roleta')->with('mensagem', 'Dados salvos com sucesso!');

    }
}
