<?php

try {
    $mysqli = new mysqli(hostname: 'localhost', username: 'root', password: '', database: 'bancoadoroanime');
}
catch (Exception $erro) {
    echo 'Erro na conexão. ' . 'Erro N°: '. $erro->getCode() . ' => ' . $erro->getMessage();
}