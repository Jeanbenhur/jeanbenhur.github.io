<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "jeanbenhur7@gmail.com";
    $assunto = " coleta de dados ";
    
    $corpo = "nome: " .$nome."\n"."email: " .$email."\n"."telefone: ".$telefone."\n";

    $cabeca = "From:jeanbenhur7@gmail.com"."\n"."reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("email enviado com sucesso!");
    }else{
        echo("houve um erro ao enviar!");
    }


