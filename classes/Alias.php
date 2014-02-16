<?php
    
    class Alias {
        private $url;
        
        public function getURL(){
            $this->url = substr($_SERVER['REQUEST_URI'], 1);
            return $this->url;
        }
        
        
                
    }