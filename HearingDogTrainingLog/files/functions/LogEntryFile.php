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

$log->username = $_SESSION["username"];
$log->lognumber = "5";
$log->dateoflog = $_POST["date"];
$log->training = $_POST["log"];
$log->success = $_POST["status"];

$isLogValid = $log->validateLog();

if ($isLogValid) {    
    insertLog($log->username, $log->lognumber, $log->dateoflog, $log->training, $log->success);
    
    echo ('<logentry>'
            . '<username>' . $log->username . '</username>'
            . '<lognumber>' . $log->lognumber . '</lognumber>'
            . '<date>' . $log->dateoflog . '</date>'
            . '<log>' . $log->training . '</log>'
            . '<status>' . $log->success . '</status>'
            . '</logentry>');
} else {
    header("Location: index.php");
}

