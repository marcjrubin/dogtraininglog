<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'files/db/DBConnection.php';

function insertUser($userFirst, $userLast, $userEmail, $userName, $userPassword) {
    try {
        $connect = getConnection();
        $sql = "INSERT INTO Member (firstName, lastName, email, username, password) " 
                . "VALUES ('$userFirst', '$userLast', '$userEmail', '$userName', '$userPassword')";
        $connect->exec($sql);
        $connect = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Insert failed : " . $ex->getMessage();
    } finally {
        header('Location: Login.php');
    }
}