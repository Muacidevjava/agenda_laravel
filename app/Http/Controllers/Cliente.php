<?php

namespace App\Http\Controllers;

use App\Models\Cliente as ModelsCliente;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nome' => 'required',
                'email' => 'required|email',
                'cpf' => 'required',
            ]);

            $cliente = new ModelsCliente();
            $cliente->nome = $request->nome;
            $cliente->email = $request->email;
            $cliente->cpf = $request->cpf;
            $cliente->cep = $request->cep;
            $cliente->endereco = $request->endereco;
            $cliente->numero = $request->numero;
            $cliente->complemento = $request->complemento;
            $cliente->cidade = $request->cidade;
            $cliente->bairro = $request->bairro;
            $cliente->uf = $request->uf;
            $cliente->celular = $request->celular;
            $cliente->sexo = $request->sexo;
            $cliente->nascimento = $request->nascimento;
            $cliente->observacao = $request->observacao;
            
            $cliente->save();

            return redirect()->back()->with('success', 'Cliente cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrar cliente: ' . $e->getMessage())->withInput();
        }
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
