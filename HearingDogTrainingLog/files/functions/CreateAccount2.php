<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$emailaddress = trim($_POST["emailAddress"]);
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$confirmpwd = trim($_POST["confirmpwd"]);

if ($password != $confirmpwd) {
    header('Location: CreateNewAccount.php');
}

if (strlen($username) > 30) {
    header('Location: CreateNewAccount.php');
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$conn = new PDO('mysql:host=localhost;dbname=dogtraininglogsystem', 'doglog', 'dog<3owner');

$query = $conn->prepare('INSERT INTO members (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?);');
$query->execute(array($firstname, $lastname, $emailaddress, $username, $passwordHash));

header('Location: Login.php');




