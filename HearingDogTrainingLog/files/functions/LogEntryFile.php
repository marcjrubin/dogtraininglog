<?php

session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'files/objects/LogObject.php';
include 'files/db/InsertLog.php';

$log = new Log();

//$log->username = $_SESSION["username"];
//$log->lognumber = $_POST["lognumber"];
$log->dateoflog = $_POST["date"];
$log->command = $_POST["log"];
$log->success = $_POST["status"];

$isLogValid = $log->validateLog();

if ($isLogValid) {    
    insertLog($log->dateoflog, $log->command, $log->success);
    
    echo ('<logentry>'
            . '<date>' . $log->dateoflog . '</date>'
            . '<log>' . $log->command . '</log>'
            . '<status>' . $log->success . '</status>'
            . '</logentry>');
} else {
    header("Location: index.php");
}

