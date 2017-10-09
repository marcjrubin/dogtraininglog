<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'DBConnection.php';

function insertLog($datelog, $training, $success) {
    try {
        $connect = getConnection();
        $sql = "INSERT INTO " . $_SESSION["firstname"] . $_SESSION["lastname"] . " (dateoflog, log, success) "
                . "VALUES ('$datelog', '$training', '$success')";
        $connect->exec($sql);
        $connect = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Insert failed : " . $ex->getMessage();
    }
}