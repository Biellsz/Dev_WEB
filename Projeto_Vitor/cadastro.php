<?php

    include_once('config.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO tb_usuarios(username,email,senha) VALUES (:username,:email,:password)';
    $stmt = $conn->prepare($sql);
    $stmt-> bindParam(':username', $username);
    $stmt-> bindParam(':email', $email);
    $stmt-> bindParam(':password', $password);
    $stmt->execute();
