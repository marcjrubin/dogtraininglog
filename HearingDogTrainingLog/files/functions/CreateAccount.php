<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'files/objects/User.php';
include 'files/db/InsertUser.php';

$user = new User();

$user->first = trim($_POST["firstname"]);
$user->last = trim($_POST["lastname"]);
$user->emailaddress = trim($_POST["emailAddress"]);
$user->username = trim($_POST["username"]);
$user->password = trim($_POST["password"]);
$user->confirmpwd = trim($_POST["confirmpwd"]);

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$isValid = $user->validate();

if ($isValid) {
    insertUser($user->first, $user->last, $user->emailaddress, $user->username, $passwordHash);
} else {
    header('Location: CreateNewAccount.php');
}

