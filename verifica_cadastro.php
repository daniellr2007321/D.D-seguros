<?php

use Database\Database;

if (isset($_POST['email_login'])) {
    $email = $_POST['email_login'];
} else {
    $email = null;
}
if (isset($_POST['senha_login'])) {
    $pass = $_POST['senha_login'];
} else {
    $pass = null;
}
///////////////////////////////////////////////////////////////////////

require_once "../daniel_l_r/model/Database.php";
$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM usuarios WHERE email = '$email'"
);

//var_dump ($resultDb);

if (isset($resultDb[0])) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}
///////////////////////////////////////////////////////////////////////

if ($email != null && $pass != null) {

    if ($email == $emailDb && $pass == $senhaDb) : 
        session_start();

        $_SESSION['user'] = $resultDb[0];
        ?>
        <script>
            window.location.replace("../daniel_l_r/public/inicio.php");
        </script>
    <?php else : ?>
        <script>
            alert("Dados não conferem!");
            window.location.replace("index.html");
        </script>
    <?php endif;
}
