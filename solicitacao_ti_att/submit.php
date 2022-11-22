<?php

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
    $mail->Username = 'f74a0faf4885d0';
    $mail->Password = 'aaada15d86d589';
    $mail->Port = 2525;

    //Destinatario e remetente
    $mail->setFrom('ronaldo@fut.com', 'Ficha de Solicitações');
    $mail->addAddress('teste@gmail.com', 'Gabriel Ribeiro');

    //Definindo o tipo de mensagem
    $mail->isHTML(true);


    //propriedades importantes, a biblioteca phpmailer trabalha em 8 bits, utilizar utf-8 sem o encoding 64 pode causar alguns bugs.

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    //Definido o titulo do e-mail

    $mail->Subject = 'Ficha de solicitação';

    //Corpo do e-mail, importante ressaltar que a melhor opção é utilizar o metodo POST e não o GET
    //Por uma questão de boas praticas e para facilitar o debug.

    $Body = "Solicitações de intens, segue: <br><br>
    Nome:" . $_POST['texto1'] . "<br>
    e-mail:" . $_POST['texto2'] . "<br>" . "<p>" . "Requisições" . "<br>" . $_POST['Notebook'] . "<br>" . $_POST['Desktop'] . "<br>" . $_POST['celular1'] . "<br>"
        . $_POST['celular2'] . "<br>" . $_POST['Filtro_de_linha'] . "<br>" . $_POST['No-break'] . "<br>" . $_POST['Monitores'] . "<br>"
        . $_POST['impressora1'] . "<br>" . $_POST['impressora2'] . "<br>" . $_POST['libre_office'] . "<br>" . $_POST['email'] . "<br><br> Licenças: <br><br>" . $_POST['microsiga1'] . "<br>" . $_POST['microsiga2'] . "<br>"
        . $_POST['autocad'] . "<br>" . $_POST['solid'] . "<br>" . $_POST['pdm'] . "<br>" . $_POST['office'] . "<br>" . $_POST['pwbi'] . "<br>" . $_POST["Adobe"] . "<br>" . $_POST['zoom'] . "<br>"
        . $_POST['skype'] . "<br>" . $_POST['teams'] . "<br>" . $_POST['certificado'] . "<br>" . $_POST['a3'];

    $mail->Body = $Body;
    //altBody = Texto puro.
    $mail->AltBody = '';

    //Finalizando o envio do seu e-mail

    $mail->send();
    echo 'Sua ficha foi enviada com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar ficha codigo: {$mail->ErrorInfo}";
}
