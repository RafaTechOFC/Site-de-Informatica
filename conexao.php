<?php

$mysqli = new mysqli("localhost:3307", "root", "", "informatica");
if(mysqli_connect_errno()){
    
    echo 'Erro de Conexão'. mysqli_connect_error();    
    exit();
}
