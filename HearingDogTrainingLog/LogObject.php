<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Log {
    public $dateoflog;
    public $training;
    public $success;
    
    function validateLog() {
        if ($this->dateoflog === null || $this->dateoflog === '') {
            return FALSE;
        }
        
        if ($this->training === null || $this->training === '') {
            return FALSE;
        }
        
        if ($this->success === null || $this->success === '') {
            return FALSE;
        }
        
        return TRUE;
    }
}