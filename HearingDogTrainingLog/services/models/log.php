<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Log implements JsonSerializable {
    private $today = '', $log = '', $status = '';
    
    public function __construct($todayD, $logE, $statusYN) {
        $this->today = $todayD;
        $this->log = $logE;
        $this->status = $statusYN;
    }
    
    public function jsonSerialize() {
        return [
            'today' => $this->today,
            'log' => $this->log,
            'status' => $this->status
        ]; 
    }
}