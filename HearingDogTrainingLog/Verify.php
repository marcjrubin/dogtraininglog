<?php
    
    session_start();
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new PDO('mysql:host=localhost;dbname=DogTrainingLogSystem', 'mrubin', 'Hexcel$1978');

$sql = "SELECT id, firstname, lastname, password FROM member WHERE username = :username";
$result = $conn->prepare($sql);
$result->bindParam(":username", $username);
$result->execute();

$num_of_rows = $result->rowCount();

if($num_of_rows == 0) // User not found. So, redirect to Login.php
{
    header('Location: Login.php');
}

$qry = $result->fetch(PDO::FETCH_ASSOC);

if(password_verify($password, $qry['password'])) // Incorrect password. So, redirect to Login.php
{
    header('Location: LogEntry.php');
    $_SESSION["firstname"] = $qry['firstname'];  
    $_SESSION["lastname"] = $qry['lastname'];
} 
else 
{
    header('Location: Login.php');
}