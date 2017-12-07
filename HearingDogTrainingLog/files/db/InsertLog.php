<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'files/db/DBConnection.php';

function insertLog($username, $lognumber, $datelog, $command, $success) {
    try {
        $connect = getConnection();
        $sql = "INSERT INTO members (username, lognumber, logentrydate, command, success) "
                . "VALUES ('$username', '$lognumber', '$datelog', '$command', '$success')";
        $connect->exec($sql);
        $connect = null;
    } catch (PDOException $ex) {
        echo "EXCEPTION : Insert failed : " . $ex->getMessage();
    }
}