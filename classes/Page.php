<?php

    require_once "Bd.php";

    class Page {
        public $pageType;
        private $pageData;        
        private $base;
        private $multipage = "Single";
        
        public function __construct($type) {
            $this->pageType = $type;
            $bd = new Bd();
            $this->base = $bd->getConnection();
            $res = $this->base->query("SELECT * FROM o_pages WHERE type = '$this->pageType' ");
            if($res->num_rows || $this->pageType == "not-found" || $this->pageType == ""){
                $this->pageData = $res->fetch_array();
                if(strpos($type, "/") !== false){
                    $this->multipage = "Advanced";
                }   
            }else{                              
               header("Location: /not-found");
            }
                       
        }
        
        public function getHeader() {
            include_once "blocks/header.php";
        }
        public function getMenuCatalog() {
            echo '
             <div class="catalog-block-place">
                            <p class="title-block-text">КАТАЛОГ СЕКС-ШОПА</p>
                            <div class="left-catalog-wrapper">
                                <ul>
                                    <li><a href="#">Вагина, мастурбатор</a></li>
                                    <li><a href="catalog/vibrator">Вибраторы</a></li>
                                    <li><a href="#">Анальные стимуляторы</a></li>
                                    <li><a href="#">Фаллоимитаторы</a></li>
                                    <li><a href="#">Вагинальные шарики</a></li>                                    
                                </ul>
                             </div>
                        </div>  
            ';
        }
        
        public function getHorizontalMenuCatalog(){
            echo '
            <nav class="horizontal-category-nav">
                            <div class="hor-left-upper-corner"></div>
                            <div class="hor-right-upper-corner"></div>
                            <ul>
                                <!-- For men !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-men"></div>для мужчин</a>
                                </li>
                                <!-- For women !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-women"></div>для женщин</a>
                                </li>
                                <!-- For couple !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-couple"></div>для пары</a>
                                </li>
                                <!-- Vibrators !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-vibrators"></div>вибраторы</a>
                                </li>
                                <!-- Dildo !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-dildo"></div>фалоимитаторы</a>
                                </li>
                                <!-- To the anus !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-anus"></div>для ануса</a>
                                </li>
                                <!-- Preparation !-->
                                <li>
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-preparation"></div>препараты</a>
                                </li>
                                 <!-- Underwear !-->
                                <li style="border-right: 1px solid #b8b8b8">
                                    <a class="horiz-cat-links"><div class="cat-nav-icon-underwear"></div>секс белье</a>
                                </li>
                            </ul>
                            <div class="hor-left-bottom-corner"></div>
                            <div class="hor-right-bottom-corner"></div>
                        </nav>
            ';
        }
        
        public function homeContent(){
            echo '
                <p><img src="../image/new/bannerpompa.jpg" width="790" height="180" /></p>
            ';
        }
        
        public function notFoundConnet(){
            echo '
            <h1>К сожалению, страница не найдена</h1>
            <img src="image/errors/page-not-found.jpg" width="800" height="616" />
            ';
        }
        
        public function getItems($type){
            $res = $this->base->query("SELECT * FROM o_products INNER JOIN o_product_type ON o_products.type_id = o_product_type.id WHERE o_product_type.type = '$type' ");            
            return $res;
        }
        
        public function getCatalog($type){
                        
            include_once "blocks/catalog.php";            
        }
        
        public function getProdType($type){
            $dirs = explode("/", $type);
            $product_type = $dirs[1];
            return $product_type;
        }
        
        public function getProdName($type){
            $dirs = explode("/", $type);
            $product_name = $dirs[2];
            return $product_name;
        }
               
        
        public function getCentralData() {
            if($this->multipage == "Single"){
                switch($this->pageData['type']){
                    case 'home':
                        $this->homeContent();
                        break;
                    case 'not-found':
                        $this->notFoundConnet();
                        break;
                    case 'catalog':
                        $this->notFoundConnet();
                        break;
                    default: 
                        $this->homeContent();
                        break;
                }
            }else{                                
                 $product_type = $this->getProdType($this->pageType);               
                // Генерируем хлебные крошки
                $path = "<div class='breadcrumbsContainer'><a href='/'>Главная</a> </div><div class='bc_arrow'>→</div><div class='breadcrumbsContainer'><h1>".$this->pageData['header']."</h1></div>";
                $dirs = explode("/", $this->pageType);
                $numbeOfDirs = count($dirs);
                if($numbeOfDirs > 2){
                    $this->multipage = "AdvancedItem";
                    $product_name = $this->getProdName($this->pageType);                    
                    $path = "<div class='breadcrumbsContainer'><a href='/'>Главная</a> → </div><div class='breadcrumbsContainer'><h1>".$this->pageData['header']."</h1>"." → </div><div class='breadcrumbsContainer'><h1>".$product_name."</h1></div>";
                }
                // Показываем Bread crumbs
                echo '
                    <div class="bread-crumbs">'.$path.'<div class="cls"></div></div>
                    <div class="cls"></div>
                ';
                // End Bread crumbs                
                
                
                if($this->multipage == "AdvancedItem"){
                    // Eto edinitsa tovara                    
                }else{
                    // Eto razdel tovara
                    $this->getCatalog($product_type);
                }
            }
        }
        public function getFooter() {}
    }