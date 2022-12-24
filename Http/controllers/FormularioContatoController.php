<?php

namespace Alixame\FormularioContato\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alixame\FormularioContato\Models\FormularioContato;

class FormularioContatoController extends Controller 
{
    public function index()
    {
        return view('view::formulario-contato');
    }

    public function sendMail(Request $request)
    {
        FormularioContato::create($request->all());
        
        return redirect(route('contato'))->with(['mensagem' => 'Obrigado! Seu e-mail foi enviado com sucesso.']);
    }

    public function teste()
    {
        return ['teste' => 'teste'];
    }
}