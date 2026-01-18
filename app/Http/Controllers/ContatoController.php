<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar_contato(Request $request)
    {
        if( $request->origem==null || $request->origem!='contato')
        {
            return redirect('/contato');
        }

        $request->validate(
            [
            'nome' => 'required|max:200',
            'telefone'=> 'required|size:14',
            'email' => 'required|max:200',
            'assunto' => 'required|max:300',
            'mensagem' => 'required|max:500',
            'origem' => 'required',
            ],
            [
                'nome.required'=>'O nome não pode ser vazio!',
                'nome.max'=>'O nome deve ser menor 200 caracteres!',
                'telefone.required'=>'O telefone não pode ser vazio!',
                'telefone.size'=>'O telefone deve estar completo! Coloque todo o seu número de telefone.',
                'email.required'=>'O e-mail não pode ser vazio!',
                'email.max'=>'O e-mail não pode ser maior que 200 caracteres!',
                'assunto.required'=>'O assunto não pode ser vazio!',
                'assunto.max'=>'O assunto não pode ser maior que 300 caracteres!',
                'mensagem.required'=>'A mensagem não pode ser vazia!',
                'mensagem.max'=>'A mensagem não pode ser maior que 500 caracteres!',
                'origem.required'=>'null!',
            ]
        );

        if( url('/') != "http://localhost:8000" )
        {

            $assunto = strtolower($request->assunto);
            $nome = strtolower($request->nome);
            $mensagem = strtolower($request->mensagem);
            $emailForm   = strtolower($request->email);

            // Palavras comuns de SPAM
            $spamWords = [
                'viagra', 'bitcoin', 'crypto', 'investment', 'loan',
                'free money', 'casino', 'seo service', 'backlink',
                'make money', 'click here', 'porn', 'xxx', 'escort',
                'Ankit','ankit','SEO'
            ];

            foreach ($spamWords as $word) {
                if (
                    (str_contains($mensagem, $word)) || (str_contains($assunto, $word))  
                    || (str_contains($nome, $word)) || (str_contains($emailForm, $word))
                ) 
                {
                    return redirect('/')->with('msg','Seu contato foi salvo com sucesso!');
                    break;
                }
            }

            $contato = array(
                'nome'=>$request->nome,
                'telefone'=>$request->telefone,
                'email'=>$request->email,
                'assunto'=>$request->assunto,
                'mensagem'=>$request->mensagem,
            );

            $email = "fronteiradigitalsac@gmail.com";

            $EmailController = new EmailController();
            $EmailController->enviar_para_page_contato($contato,$email);

        }

        return redirect('/')->with('msg','Seu contato foi salvo com sucesso!');
    }
}
