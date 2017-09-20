<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'LogObject.php';
include 'InsertLog.php';

$log = new Log();

$log->dateoflog = $_POST["today"];
$log->training = $_POST["log"];
$log->success = $_POST["status"];

$isLogValid = $log->validateLog();

if ($isLogValid) {    
    insertLog($log->dateoflog, $log->training, $log->success);
    
    echo ('<logentry>'
            . '<today>' . $log->dateoflog . '</today>'
            . '<log>' . $log->training . '</log>'
            . '<status>' . $log->success . '</status>'
            . '</logentry>');
} else {
    header("Location: index.php");
}

