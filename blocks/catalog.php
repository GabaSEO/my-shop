<?php
    require_once "classes/Alias.php";
    require_once "classes/Page.php";
    
    $alias_loc = new Alias();
    $url_loc = $alias_loc->getURL();
    
    $page_loc = new Page($url_loc);
    $type = $page_loc->getProdType($page_loc->pageType);
    $items = $page_loc->getItems($type);    
    
 ?>

<!-- Left part (Catalog) !-->
<div class='catalog-left-part'>
    <div class="sorting-field">
         <div class="sort-upper-border"></div>
         <ul>
            <li>Подобрать:</li>
            <li><a href="#">все</a></li>
            <li><a href="#">дешевые</a></li>
            <li><a href="#">дорогие</a></li>
         </ul>
         <div class="cls"></div>
        <div class="sort-bottom-border"></div>        
    </div>
    
    <ul id="catalog">
    <?php        
        while($item = $items->fetch_array()){        
        echo '
        <li class="item">
            <div class="item-foto"><a href="'.$item['alias'].'"><img src="/image/product/'.$item['img'].'" alt="'.$item['alt'].'" /></a></div>
            <div class="item-info">                
                <p class="item-tittle"><a href="'.$item['alias'].'">'.$item['title'].'</a></p>
                <div class="item-in-shop">
                    <img src="../image/style/v_nali4.png" width="7" height="7" />
                    <p>в наличии </p>
                </div>
                <div class="cls"></div>
                <div class="item-price">
                    <span>Сегодня за:</span>
                    <p>'.$item['price'].' грн</p>                    
                </div>
                <div class="cls"></div>
                <div class="item-read-buy">
                    <div class="item-read"><p>→<a href="'.$item['alias'].'">Подробное описание</a></p></div>
                    <button class="item-buy">в корзину</button>
                    <div class="cls"></div>
                </div>
            </div>
            <div class="cls"></div>
        </li>
        ';
        }
        ?>
    </ul>
</div>