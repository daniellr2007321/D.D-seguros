<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguros D.D</title>
</head>
<body>
    <h1>Seja bem vindo <?= $_SESSION['user']->nome ?></h1>
</body>
</html>