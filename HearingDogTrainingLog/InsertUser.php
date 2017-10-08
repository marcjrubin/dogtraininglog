<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'DBConnection.php';

function insertUser($userFirst, $userLast, $userEmail, $userName, $userPassword, $userSalt) {
    try {
        $connect = getConnection();
        $sql = "INSERT INTO Member (firstName, lastName, email, username, password, salt) " 
                . "VALUES ('$userFirst', '$userLast', '$userEmail', '$userName', '$userPassword', '$userSalt')";
        $connect->exec($sql);
        $connect = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Insert failed : " . $ex->getMessage();
    } finally {
        header('Location: Login.php');
    }
}