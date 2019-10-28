<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'adminvmo');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

//comando para funcionar conexão com o server
//ALTER USER root@'localhost' IDENTIFIED WITH mysql_native_password BY 'adminvmo'