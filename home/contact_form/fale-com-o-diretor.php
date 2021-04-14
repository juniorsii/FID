<?php

// configure
$from = 'OUVIDORIA <ouvidoria@deltafaculdade.edu.br>';
$sendTo = 'direcao@deltafaculdade.edu.br';
$subject = 'Nova mensagem de Fale com o Diretor';
$fields = array('name' => 'Nome', 'email' => 'Email', 'phone' => 'Telefone', 'message' => 'Mensagem');

 // array variable name => Text to appear in the email
$okMessage = 'Formulário de contato enviado com sucesso. Obrigado, vou entrar em contato com você em breve!';

$errorMessage = 'Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.';

// let's do the sending

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
    //your site secret key
    $secret = '6LdPSaAUAAAAACP3UpruRnoF50DO27G9QAnwa62V';
    //get verify response data

    $c = curl_init('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $verifyResponse = curl_exec($c);

    $responseData = json_decode($verifyResponse);
    if($responseData->success):

        try
        {
            $emailText = nl2br("Você tem uma nova mensagem do formulário de contato\n");
            $email_conteudo = "Nome = $name \n"; 
            $email_conteudo = "Email = $email \n";
            $email_conteudo = "Telefone = $phone \n";
            $email_conteudo = "Mensagem = $message \n"; 

            foreach ($_POST as $key => $value) {

                if (isset($fields[$key])) {
                    $emailText .= nl2br("$fields[$key]: $value\n");
                }
            }

            $headers = array('Content-Type: text/html; charset="UTF-8";',
                'From: ' . $from,
                'Reply-To: ' . $from,
                'Return-Path: ' . $from,
            );
            
            mail($sendTo, $subject, $emailText, implode("\n", $headers));

            $responseArray = array('type' => 'success', 'message' => $okMessage);
        }
        catch (\Exception $e)
        {
            $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
        }
        else {
            echo $responseArray['message'];
        }

    else:
        $errorMessage = 'A verificação do robô falhou. Tente novamente.';
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
    endif;
else:
    $errorMessage = 'Por favor, clique na caixa reCAPTCHA.';
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
endif;



