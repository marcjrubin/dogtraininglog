<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set('display_errors', 1);

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new PDO('mysql:host=localhost;dbname=DogTrainingLog', 'dog', 'Dog<3Owner');

$sql = "SELECT password FROM Member WHERE username = '" . $username . "'";
$result = $conn->query($sql);

if($result->num_rows == 0) // User not found. So, redirect to Login.php
{
    header('Location: Login.php');
}

//$passwordHash = $result->fetch(PDO::FETCH_ASSOC);
//$hash = hash('sha256', $userData['salt'] . hash('sha256', $password));

$pwd = $result->fetch_assoc();

//if($hash != $userData['password']) // Incorrect password. So, redirect to Login.php
if($password == $pwd['password'])
{
    header('Location: LogEntry.php');
} 
else 
{
    header('Location: SoundWork.php');
}