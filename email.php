<?php

if(isset($_POST['email']) && !empty($_POST['email']){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['messege']);


$to = "hectordiel9@gmail.com";
$subject = "Trabalho";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email."\n"
        "Mnesagem: ".$mensagem;
$header = "From:hectordiel64@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."x=Mailer:PHP/".phpversion();


If(mail($TO,$subject,$body,$header)){

echo("Email enviado com sucesso");

}else{
    echo("Email não pode ser enviado");

}



?>