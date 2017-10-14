<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    //include 'InsertUser.php';

    class User {    
        public $first;
        public $last;
        public $emailaddress;
        public $username;
        public $password;
        public $confirmpwd;
        
        function validate() {
            if ($this->first === null || $this->first === '') {
                return false;
            }
            
            if ($this->last === null || $this->first === '') {
                return false;
            }
            
            if ($this->emailaddress === null || $this->emailaddress === '') {
                return false;
            }
            
            if ($this->username === null || $this->username === '') {
                return false;
            }
            
            if ($this->password === null || $this->password === '') {
                return false;
            }
            
            if ($this->confirmpwd === null || $this->confirmpwd === '') {
                return false;
            }
            
            if ($this->password !== $this->confirmpwd) {
                return false;
            }
            
            if(strlen($this->username) > 30) {
                return false;
            }                
            
            return true;            
        }
    }