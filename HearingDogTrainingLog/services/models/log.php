<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Log implements JsonSerializable {
    private $date = '', $log = '', $status = '';
    
    public function __construct($dateD, $logE, $statusYN) {
        $this->date = $dateD;
        $this->log = $logE;
        $this->status = $statusYN;
    }
    
    public function jsonSerialize() {
        return [
            'date' => $this->date,
            'log' => $this->log,
            'status' => $this->status
        ]; 
    }
}