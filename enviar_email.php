<?php

$error = "";

$nome = $_POST["nome"];

//email
$email = $_POST["email"];


$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];
$assunto = $_POST['assunto'];
 
$To = "mimo@mimomaternal.com.br";
$uglySubject = "[Site | Contato] $assunto";
$Subject='=?UTF-8?B?'.base64_encode($uglySubject).'?=';

$Body .= "<html><body style='width: 690px'><b>$nome</b>, utilizou a área de contato do site querendo saber sobre <b>$assunto</b> e escreveu:<br/><br/>$mensagem<br/><br/>Para retornar este contato temos estas opções: <b>$email</b> <b>$telefone</b></body></html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Transfer-Encoding: 8bit" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: $email" . "\r\n";
 
// send email
$success = mail($To, $Subject, $Body, $headers);
 
// redirect to success page
if ($success && $error == ""){
   echo "Sua mensagem foi enviada com sucesso!";
}
/*else{
    if($error == ""){
        echo "Algo deu errado... Mas deu errado num nível, que é melhor você nos ligar no telefone (21) 984016556, porque pelo site vai ser difícil.";
    } else {
        echo $error;
    }
}*/
 
?>