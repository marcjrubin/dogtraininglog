<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getConnection() {
    $servername = "localhost";
    $dbname = "hearingdogtraininglog";
    $username = "root";
    $password = "";
    
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        echo "EXCEPTION: Connection failed : " . $ex->getMessage();
    }
    
    return $connection;
}
