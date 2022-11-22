<?php
error_reporting(0);

//Digitando o caminho da biblioteca

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

//Chamando a biblioteca 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {

    //Setando as configuraçoes do servidor
    //$mail->SMTPDebug = SMTP:: DEBUG_SERVER;

    $mail->isSMTP();
    //$mail->SMTPSecure = false;
    //$mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '4e6cc92533268e';
    $mail->Password = '0af298460f7c98';
    $mail->Port = 2525;

    //Destinatario e remetente
    $mail->setFrom('ronaldo@fut.com', 'Ficha de Solicitações');
    $mail->addAddress('teste@gmail.com', 'Gabriel Ribeiro');

    //Definindo o tipo de mensagem
    $mail->isHTML(true);


    //propriedades importantes, a biblioteca phpmailer trabalha em 8 bits, utilizar utf-8 sem o encoding 64 pode causar alguns bugs ficha.pedidoti@furgaoibipora.com senha esta em keys.

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    //Definido o titulo do e-mail

    $mail->Subject = 'Ficha de solicitação';

    //Corpo do e-mail, importante ressaltar que a melhor opção é utilizar o metodo POST 
    

    $Body = "<h1> Solicitação de equipamento: </h1> <br> <p> Dados do Solicitante:</p><br>
    Nome: " . $_POST['texto1'] . "<br>
    Cargo: " . $_POST['texto2']. "<br> Local Fisico: " . $_POST['texto3'] . "<br> Contato: " . $_POST['texto4'] ."<br>
    <p> Dados novo colaborador:</p>" . "Nome: ". $_POST['texto5']  . "<br> Cargo: " . $_POST['texto6'] . "<br> Local Fisico: " . $_POST['texto7'] . "<br> Data de inicio: " . $_POST['data']
     . "<p> Requisições: </P>" . "<br>" . $_POST['notebook'] . "<br>" . $_POST['desktop'] . "<br>" . $_POST['celular'] . "<br>"
        . $_POST['celularr'] . "<br>" . $_POST['filtrodelinha'] . "<br>" . $_POST['nobreak'] . "<br>" . $_POST['monitores'] . "<br>"
        . $_POST['impressora'] . "<br>" . $_POST['impressoraa'] . "<br>" . $_POST['libreoffice'] . "<br>" . $_POST['email'] . "<p>Licenças:</p><br>" . $_POST['microsiga'] . "<br>" . $_POST['microsigaa'] . "<br>"
        . $_POST['autocad'] . "<br>" . $_POST['solid'] . "<br>" . $_POST['pdm'] . "<br>" . $_POST['office'] . "<br>" . $_POST['pwbi'] . "<br>" . $_POST['adobe'] . "<br>" . $_POST['zoom'] . "<br>"
        . $_POST['skype'] . "<br>" . $_POST['teams'] . "<br>" . $_POST['certificado'] . "<br>" . $_POST['aaa'] . "<br> Caminhos de rede:" . "<br>". $_POST['caixadetexto'] . "<br> Observações: ". "<br>" . $_POST["caixadetexto2"]   ;


    $mail->Body = $Body;
    //altBody = Texto puro.
    $mail->AltBody = '';

    //Finalizando o envio do seu e-mail

    $mail->send();
    echo 'Sua ficha foi enviada com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar ficha codigo: {$mail->ErrorInfo}";
}
