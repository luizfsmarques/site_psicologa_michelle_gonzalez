<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    
    public function enviar_para_page_contato($contato,$email)
    {
        error_reporting(E_ALL & ~E_NOTICE); // Os erros não prejudiciais não são avisados.

        $mail = new PHPMailer(true);

        try{
            $titulo = "Sistema - Mensagem de contato enviada pelo site ";
            $mensagem = "<div>";
                $mensagem .= "<p> Mesnagem de contato enviada pelo site: </p>";
                $mensagem .= "<p> Assunto da mensagem: ".$contato['assunto']."</p>";
                $mensagem .= "<p> Nome: ".$contato['nome']."</p>";
                $mensagem .= "<p> E-mail: ".$contato['email']."</p>";
                $mensagem .= "<p> Telefone: ".$contato['telefone']."</p>";
                $mensagem .= "<p> Mensagem: ".$contato['mensagem']."</p>";    
            $mensagem .= "</div>";
            
            $endereco = $email;

            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.titan.email";
            $mail->Port = 465 ; // or 587
            $mail->IsHTML(true);
            $mail->Username = config('app.email_sistema');
            $mail->Password = config('app.email_sistema_password');
            $mail->SetFrom(config('app.email_sistema')); // Email origem
            
            $mail->Subject = $titulo;
            $mail->Body = $mensagem; // Mensagem do email
            $mail->AddAddress($endereco); // Email destino
            
            $mail->send();
            
              
        }catch(Exception $e){
        
            echo "Mensagem n達o foi enviada. O erro foi: {$mail->ErrorInfo}";
        
        }

    }

    // public function enviar_para_login($idIgreja,$titulo,$mensagem,$endereco)
    // {
    //     error_reporting(E_ALL & ~E_NOTICE); // Os erros não prejudiciais não são avisados.
        
    //     $mail = new PHPMailer(true);

    //     try{
           
    //         $mail->IsSMTP(); // enable SMTP
    //         $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    //         $mail->SMTPAuth = true; // authentication enabled
    //         $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    //         $mail->Host = "smtp.titan.email";
    //         $mail->Port = 465 ; // or 587
    //         $mail->IsHTML(true);
    //         $mail->Username = "sistema@sistema.jc-contabilidade.com";
    //         $mail->Password = "jccontabilidade@2412jc;";
    //         $mail->SetFrom("sistema@sistema.jc-contabilidade.com"); // Email origem
            
    //         $mail->Subject = $titulo;
    //         $mail->Body = $mensagem; // Mensagem do email
    //         $mail->AddAddress($endereco); // Email destino
            
    //         $mail->send();
            
    //         // echo "Mensagem foi enviada com sucesso";
            
 
    //     }catch(Exception $e){

    //         echo "Mensagem n達o foi enviada. O erro foi: {$mail->ErrorInfo}";

    //     }

    // }



}
