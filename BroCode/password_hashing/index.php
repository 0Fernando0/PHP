<?php 
    // hashing - transformando senhas
    $password = "123456";
    $hash_password = password_hash($password, PASSWORD_DEFAULT);


    if(password_verify("123456",$hash_password)){
        echo "senha certa";
    }else{
        echo "senha errada!";
    }

?>