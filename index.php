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
                        <ul>
                            <li><a href="#">оплата и доставка</a></li>
                            <li><a href="#">гарантии анонимности</a></li>
                            <li><a href="#">контакты и адреса</a></li>
                            <li><a href="#">размерная секта</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div id="right-border"></div>
                <div class="cls"></div>
            </header>            
            <div id="content"></div>
            <footer></footer>
        </div>
    </body>
</html>