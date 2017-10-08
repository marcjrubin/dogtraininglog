<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'User.php';
include 'InsertUser.php';

$user = new User();

$user->first = trim($_POST["firstname"]);
$user->last = trim($_POST["lastname"]);
$user->emailaddress = trim($_POST["emailAddress"]);
$user->username = trim($_POST["username"]);
$user->password = trim($_POST["password"]);
$user->confirmpwd = trim($_POST["confirmpwd"]);

$hash = hash('sha256', $user->password);

function createSalt()
{
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
}

$salt = createSalt();
$pwd = hash('sha256', $salt . $hash);

$isValid = $user->validate();

if ($isValid) {
    insertUser($user->first, $user->last, $user->emailaddress, $user->username, $pwd, $salt);
} else {
    header('Location: CreateNewAccount.php');
}

