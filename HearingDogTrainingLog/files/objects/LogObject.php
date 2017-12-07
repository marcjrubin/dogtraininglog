<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Log {
    //public $username;
    //public $lognumber;
    public $dateoflog;
    public $command;
    public $success;
    
    function validateLog() {
//        if ($this->username === null || $this->username === '') {
//            return FALSE;
//        }
        
//        if ($this->lognumber === null || $this->lognumber === '') {
//            return FALSE;
//        }
        
        if ($this->dateoflog === null || $this->dateoflog === '') {
            return FALSE;
        }
        
        if ($this->command === null || $this->command === '') {
            return FALSE;
        }
        
        if ($this->success === null || $this->success === '') {
            return FALSE;
        }
        
        return TRUE;
    }
}