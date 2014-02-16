<?php
    require_once "classes/Alias.php";
    require_once "classes/Page.php";    
    
    $alias = new Alias();
    $url = $alias->getURL();
    
    $page = new Page($url);
    
    
    
    $page->getHeader($url);
 ?>

           <!-- Центральная часть (контент + навигация) !-->
            <div id="content">
                <div class="content-upper-border"></div>
                <div class="central-part">
                   <div id="content-left-part">
                        <?php
                            $page->getMenuCatalog();
                         ?>              
                   </div>                   
                   <div id="content-right-part">
                        <?php
                            $page->getHorizontalMenuCatalog();
                         ?>
                         <!-- Content !-->
                        <?php
                            $page->getCentralData();
                         ?>                    
                   </div>
                   <div class="cls"></div>
               </div>
               <div class="content-bottom-border"></div>               
            </div>
            <footer></footer>
        </div>
    </body>
</html>