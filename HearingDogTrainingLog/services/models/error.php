<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Error implements JsonSerializable {
    private $errorMessage = '', $httpCode = 400;
    
    public function __construct($message, $httpStatusCode) {
        $this->errorMessage = $message;
        $this->httpCode = $httpStatusCode;
    }
    
    public function jsonSerialize() {
        return [
            'errorMessage' => $this->errorMessage,
            'httpCode' => $this->httpCode
        ];
    }
}