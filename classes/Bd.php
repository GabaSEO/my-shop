<?php

    require_once "Settings.php";
    
    class Bd {
        private $base;
        
        public function __construct(){
            $this->base = new mysqli(Settings::HOST_NAME, Settings::BASE_USER, Settings::USER_PASS, Settings::BASE_NAME);
            if($this->base->connect_errno){
                echo "Не удалось подключиться к базе данных - ".$this->base->connect_errno;
            }
        }
        
        public function getConnection() {
            return $this->base;
        } 
    }