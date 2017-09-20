<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // log.php
    include './models/log.php';
    $logs = [];
    
    $logs[] = new Log('1/1/2016', 'Sit', 'Yes');
    $logs[] = new Log('1/2/2016', 'Sit', 'Yes');
    $logs[] = new Log('1/3/2016', 'Sit', 'No');
    
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if (count($logs) > $id) {
            http_response_code(200);
            header("Content-Type: application/json");
            echo json_encode($logs[$id]);
            exit();
        }
        else {
            include './models/error.php';
            http_response_code(404);
            header("Content-Type:application/json");
            $error = new Error('Log Not Found', 404);
            echo json_encode($error);
            exit();
        }
    } 
    else {
        http_response_code(200);
        header("Content-Type:application/json");
        echo json_encode($logs);
        exit();
    }
    
} else {
    // error.php
    include './models/error.php';
    http_response_code(400);
    header("Content-Type:application/json");
    $error = new Error('Bad request for log entry', 400);
    echo json_encode($error);
    exit();
}