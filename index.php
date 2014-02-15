<?php
    require_once "classes/Page.php";
    $page = new Page("Main");
 ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/clear.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Shop Name</title>        
    </head>
    <body>
        <div id="page-wrapper">
            <div id="bg-upper"></div>
            <header>
                <div id="left-border"></div>
                <div id="central-header">
                    <div id="logo">                        
                        <a href="#">
                            <img src="image/style/glamurs.png" width="188" height="23" />
                            <img id="shop-name" src="image/style/logo_intim.png" width="188" height="134" />
                        </a>
                    </div>
                    <div id="logo-plus-nav">
                        <nav id="upper-nav">
                           <div id="upper-menu-left"></div>                           
                            <ul>
                                <li><a href="#">оплата и доставка</a></li>
                                <li><a href="#">гарантии анонимности</a></li>
                                <li><a href="#">контакты и адреса</a></li>
                                <li style="border-right: 0;"><a href="#">размерна€ секта</a></li>
                            </ul>                            
                            <div id="upper-menu-right"></div>
                        </nav>
                        <div class="cls"></div>
                        <a href="#" class="central-banner">
                            <img src="image/style/centr_banner.png" width="575" height="134" />
                        </a>
                    </div>
                </div>                                
                <div class="phone-and-basket">
                    <div class="phone-place">
                        <p class="title-block-text">“елефон:</p>
                        <div class="phone-wrapper">
                            <img src="image/style/tel_icon.png" width="26" height="25" />
                            050 918-71-96
                        </div>
                    </div>
                    <div class="basket-place"></div>
                </div>
                <div id="right-border"></div>
                <div class="cls"></div>
            </header>            
            <div id="content"></div>
            <footer></footer>
        </div>
    </body>
</html>