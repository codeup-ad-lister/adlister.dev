<?php

require_once '../bootstrap.php';

$user = [
    'email' => $_ENV['USER_EMAIL'],
    'password' => $_ENV['USER_PASS'],
    ];

$query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
$stmt = $dbc->prepare($query);
$stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
$stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
$stmt->execute();

