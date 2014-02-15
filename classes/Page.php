<?php

    class Page {
        private $pageType;
        private $pageTitle;
        
        public function __construct($type) {
            $this->pageType = $type;            
        }
        
        public function getHeader() {}
        public function getBody() {}
        public function getFooter() {}
    }