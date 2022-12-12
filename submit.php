<?php

//Chamando a biblioteca 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

error_reporting(0);

$hash = (md5(uniqid(mt_rand(), true)));

$agora = date('d/m/Y');

$data = str_replace("/", "-", $_POST["data"]);

$data = date('d-m-Y', strtotime($data));

$notebook = $_POST['notebook'] ? "Sim" : "Não";
$desktop = $_POST['desktop'] ? "Sim" : "Não";
$celular = $_POST['celular'] ? "Sim" : "Não";
$smartphone = $_POST['smartphone'] ? "Sim" : "Não";
$filtrodelinha = $_POST['filtrodelinha'] ? "Sim" : "Não";
$nobreak = $_POST['nobreak'] ? "Sim" : "Não";
$monitores = $_POST['monitores'] ? "Sim" : "Não";
$impressora = $_POST['impressora'] ? "Sim" : "Não";
$impressoraa3 = $_POST['impressoraa3'] ? "Sim" : "Não";
$libreoffice = $_POST['libreoffice'] ? "Sim" : "Não";
$email = $_POST['email'] ? "Sim" : "Não";
$a3 = $_POST['a3'] ? "Sim" : "Não";

$microsiga = $_POST['microsiga'] ? "Sim" : "Não";
$microsigaremoto = $_POST['microsigaremoto'] ? "Sim" : "Não";
$autocad = $_POST['autocad'] ? "Sim" : "Não";
$solid = $_POST['solid'] ? "Sim" : "Não";
$pdm = $_POST['pdm'] ? "Sim" : "Não";
$office = $_POST['office'] ? "Sim" : "Não";
$pwbi = $_POST['pwbi'] ? "Sim" : "Não";
$adobe = $_POST['adobe'] ? "Sim" : "Não";
$zoom = $_POST['zoom'] ? "Sim" : "Não";
$skype = $_POST['skype'] ? "Sim" : "Não";
$teams = $_POST['teams'] ? "Sim" : "Não";
$certificado = $_POST['certificado'] ? "Sim" : "Não";
$chip = $_POST['chip'] ? "Sim" : "Não";
$ws = $_POST['ws'] ? "Sim" : "Não";

$mail = new PHPMailer(true);

try {

    //Setando as configuraçoes do servidor
    //$mail->SMTPDebug = SMTP:: DEBUG_SERVER; 

    $mail->isSMTP();
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.furgaoibipora.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = 'ficha.pedidoti@furgaoibipora.com';
    $mail->Password = '794514@ibi';
    $mail->Port = 587;

    //Destinatario e remetente
    $mail->setFrom('ficha.pedidoti@furgaoibipora.com', 'Ficha de Solicitações');
    $mail->addAddress('ti@furgaoibipora.com.br', 'Wesley');
    $mail->addCC('manutencao.ti@furgaoibipora.com.br', 'Gabriel');
    $mail->addCC('suporte@furgaoibipora.com.br', 'Lucas');
    $mail->addCC('info@furgaoibipora.com.br', 'Audrey');
    $mail->addCC($_POST['contact']); 
    
    //Definindo o tipo de mensagem
    $mail->isHTML(true);

    //propriedades importantes, a biblioteca phpmailer trabalha em 8 bits, utilizar utf-8 

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    //Definido o titulo do e-mail e o codigo "hash"

    $mail->Subject = 'Ficha de solicitação Nº:  ' . $hash;

    //Corpo do e-mail:
    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<th colspan="10"><div style="text-align:center"> Pedido de equipamentos ao TI</div></th>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td colspan="10"><b>Nome completo: </b>' . $_POST['texto5'];
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Função: </b>' . $_POST['texto6'];
    $html .= '<td colspan="5"><b>Matricula: </b>' . $_POST['matricula'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<td colspan="5"><b>Local Fisico: </b>' . $_POST['texto7'];
    $html .= '<td colspan="5"><b>Centro de custo: </b>' . $_POST['centrodecusto'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<td colspan="10"><b>Data de inicio: </b>' . $data;
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td colspan="10">Solicitante do equipamento </td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="10"><b>Nome completo: </b>' . $_POST['texto1'];
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Função: </b>' . $_POST['cargo'];
    $html .= '<td colspan="5"><b>Contato: </b>' . $_POST['contact'];
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td colspan="5"><b>Local Fisico: </b>' . $_POST['localfisico'];
    $html .= '<td colspan="5"><b>Data da solicitação: </b>' . $agora;
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<th colspan="10"><div style="text-align:center"><b>Solicitações<b></div></th>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Notebook';
    $html .= '</td>';
    $html .= '<td><b>' .  $notebook;
    $html .= '</td>';

    $html .= '</td>';
    $html .= '<td colspan="8"><div style="text-align:center"><b>licenças</b></div>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '<tr>';

    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Desktop';
    $html .= '</td>';
    $html .= '<td><b>' . $desktop;
    $html .= '</td>';

    $html .= '<td colspan="8"><div style="text-align:center"><b>Login</b></div>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Celular simples';
    $html .= '</td>';
    $html .= '<td><b>' . $celular;
    $html .= '</td>';
    $html .= '<td colspan="4">Login AutoCAD 2019';
    $html .= '<td colspan="4"><b>' . $autocad;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Celular smartfone';
    $html .= '</td>';
    $html .= '<td><b>' . $smartphone;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Solid Works 2019';
    $html .= '<td  colspan="4"><b>' . $solid;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Filtro de linha';
    $html .= '</td>';
    $html .= '<td><b>' . $filtrodelinha;
    $html .= '</td>';
    $html .= '<td colspan="4">Login PDM';
    $html .= '<td colspan="4"><b>' . $pdm;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'No-break';
    $html .= '</td>';
    $html .= '<td><b>' . $nobreak;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsoft Office 365';
    $html .= '<td colspan="4"><b>' . $office;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '02 Monitores';
    $html .= '</td>';
    $html .= '<td><b>' . $monitores;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsft Power BI';
    $html .= '<td colspan="4"><b>' . $pwbi;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Impressora A4';
    $html .= '</td>';
    $html .= '<td><b>' . $impressora;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Adobe Creative Cloud';
    $html .= '<td colspan="4"><b>' . $adobe;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Impressora A3';
    $html .= '</td>';
    $html .= '<td><b>' . $impressoraa3;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Zoom';
    $html .= '<td colspan="4"><b>' . $zoom;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'E-Drawings 2019';
    $html .= '</td>';
    $html .= '<td><b>' . $notebook;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsoft Skype';
    $html .= '<td colspan="4"><b>' . $skype;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'Libre Office';
    $html .= '</td>';
    $html .= '<td><b>' . $libreoffice;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsoft Teams';
    $html .= '<td colspan="4"><b>' . $teams;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= 'E-mail';
    $html .= '</td>';
    $html .= '<td><b>' . $email;
    $html .= '</td>';
    $html .= '<td colspan="4">Login Certificado digital';
    $html .= '<td colspan="4"><b>' . $certificado;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '';
    $html .= '</td>';
    $html .= '<td>';
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsiga Local';
    $html .= '<td colspan="4"><b>' . $microsiga;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '';
    $html .= '</td>';
    $html .= '<td>';
    $html .= '</td>';
    $html .= '<td colspan="4">Login Microsiga remoto';
    $html .= '<td colspan="4"><b>' . $microsigaremoto;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '';
    $html .= '</td>';
    $html .= '<td>';
    $html .= '</td>';
    $html .= '<td colspan="4">Impressora A3 (aquisição)';
    $html .= '<td colspan="4"><b>' . $a3;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '';
    $html .= '</td>';
    $html .= '<td>';
    $html .= '</td>';
    $html .= '<td colspan="4">Chip telefonico';
    $html .= '<td colspan="4"><b>' . $chip;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';
    $html .= '<tr>';
    $html .= '<td>';
    $html .= '';
    $html .= '</td>';
    $html .= '<td>';
    $html .= '</td>';
    $html .= '<td colspan="4">Workstation';
    $html .= '<td colspan="4"><b>' . $ws;

    $html .= '</td>';
    $html .= '</td>';
    $html .= '</td>';

    $html .= '';
    $html .= '<tr>';
    $html .= '<td colspan="10">Acessos de Rede leitura + Escrita: <br>' . nl2br($_POST['leituraeescrita']);
    $html .= '</td>';
    $html .= '</tr>';

    $html .= '';
    $html .= '<tr>';
    $html .= '<td colspan="10">Acessos de Rede leitura: <br>' . nl2br($_POST['leitura']);
    $html .=  '</td>';
    $html .= '</tr>';

    $html .=  '';
    $html .= '<tr>';
    $html .= '<td colspan="10">Observaçoes: <br>' . nl2br($_POST['observacoes']);
    $html .= '</td>';
    $html .= '</tr>';

    $html .= '</table>';
    $html .= '<br> Este é um e-mail automático, por favor, não responda.';

    $mail->Body = $html;
    //altBody = Texto puro.

    //Finalizando.

    $mail->send();
    echo '
    
    <link rel="shortcut icon" href="apple-icon-57x57.ico">

    <head><h1> Sua ficha foi enviada com sucesso!<br>Uma copia foi enviada para seu e-mail de contato.<br>
    <img src="logo.png"></h1>
    
    <style>
    body {
        background-color: white;
    }
    h1 {
        
        text-align: center;
        color: #29b6c5;
        padding: 60px;
    } 
    h2 {
        text-align: center;
        color: #29b6c5;
        padding: 60px;
    }
    <head>
    </<style>';
} catch (Exception $e) {
    echo "Erro ao enviar ficha codigo: {$mail->ErrorInfo}<br>
    Favor contator seu administrador";
}