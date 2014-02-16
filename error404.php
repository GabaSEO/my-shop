<?php
    require_once "classes/Page.php";
    $page = new Page("Main");
    
    $page->getHeader();
 ?>

           <!-- Центральная часть (контент + навигация) !-->
            <div id="content">
                <div class="content-upper-border"></div>
                <div class="central-part">
                   <div id="content-left-part">
                         <div class="catalog-block-place">
                            <p class="title-block-text">КАТАЛОГ СЕКС-ШОПА</p>
                            <div class="left-catalog-wrapper">
                                <ul>
                                    <li><a href="#">Вагина, мастурбатор</a></li>
                                    <li><a href="#">Вибраторы</a></li>
                                    <li><a href="#">Анальные стимуляторы</a></li>
                                    <li><a href="#">Фаллоимитаторы</a></li>                                    
                                </ul>
                             </div>
                        </div>                
                   </div>                   
                   <div id="content-right-part">
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
                        <h1>К сожалению, страница не найдена</h1>
                        <img src="image/errors/page-not-found.jpg" width="800" height="616" />
                   </div>
                   <div class="cls"></div>
               </div>
               <div class="content-bottom-border"></div>               
            </div>
            <footer></footer>
        </div>
    </body>
</html>