<?php

use Database\Database;

if (isset($_POST['email_cad'])) {
    $email = $_POST['email_cad'];
} else {
    $email = null;
}
if (isset($_POST['senha_cad'])) {
    $pass = $_POST['senha_cad'];
} else {
    $pass = null;
}
if (isset($_POST['telefone_cad'])) {
    $telefone = $_POST['telefone_cad'];
} else {
    $telefone = null;
}
if (isset($_POST['nome_cad'])) {
    $nome = $_POST['nome_cad'];
} else {
    $nome = null;
}
///////////////////////////////////////////////////////////////////////

require_once "../daniel_l_r/model/Database.php";
$db = new Database();

$resultDb = $db->insert(
    "INSERT INTO `usuarios`(`telefone`, `nome`, `email`, `senha`) 
    VALUES ('$telefone','$nome','$email','$pass')"
);

//var_dump ($resultDb);

if ($resultDb) {
 header("location: index.html");
} else {
    echo "ERRO NO CADASTRO";
}
///////////////////////////////////////////////////////////////////////

