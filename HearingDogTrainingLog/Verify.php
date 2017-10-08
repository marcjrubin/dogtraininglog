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

$sql = "SELECT password FROM Member WHERE username = :username";
$result = $conn->prepare($sql);
$result->bindParam(":username", $username);
$result->execute();

$num_of_rows = $result->rowCount();

if($num_of_rows == 0) // User not found. So, redirect to Login.php
{
    header('Location: Login.php');
}

$pwd = $result->fetch(PDO::FETCH_ASSOC);

if(password_verify($password, $pwd['password'])) // Incorrect password. So, redirect to Login.php
{
    header('Location: LogEntry.php');
} 
else 
{
    header('Location: Login.php');
}