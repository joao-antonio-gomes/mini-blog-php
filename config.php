<?php

//$mysql = new mysqli('localhost', 'root', '', );
//$mysql->set_charset('utf8');
$pdo = new PDO('sqlite:data_source');

if ($pdo == TRUE) {
    echo "Banco conectado";
} else {
    echo "Erro na conexão";
}