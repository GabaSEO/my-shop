<?php

    class Page {
        private $pageType;
        private $pageTitle;
        
        public function __construct($type) {
            $this->pageType = $type;            
        }
        
        public function getHeader() {
            include_once "blocks/header.php";
        }
        public function getBody() {}
        public function getFooter() {}
    }