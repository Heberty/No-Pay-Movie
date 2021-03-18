<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{
    public function enviaContato(Request $request) {
    	$this->validate($request, [
    		'name' => 'required|min:5|max:100',			
    		'email' => 'required|email',
            'phone' => 'required',
    		'message' => 'required',
    	],[
			'name.required' => 'Preencha o campo nome',
			'name.min' => 'O nome deve ter no mínimo 5 caracteres',
			'name.max' => 'O nome deve ter no máximo 100 caracteres',
			'message.required' => 'Preencha o campo de mensagem',
			'email.required' => 'Preencha o campo de email',
            'phone.required' => 'Preencha o campo de telefone',
			'email.email' => 'Insira um email válido'
    	]);

    	
    	Mail::to('corte_heberty@hotmail.com')->send(new ContatoEmail($request));
    	return redirect()->route('index')->with('success','Email enviado com sucesso!');


    }
}
