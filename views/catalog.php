  
    <div class="main">
    <?php
        foreach ($catalog as $item):?>
        <div class="card">        
            <a href="product/card/id=<?=item[id]?> ">
                <img src="img_products/<?=item[image]?>" alt="<?=item[title]?>">                
            </a>
            <div class="label"><?=item[title]?> (<?=item[price]?> руб.)</div> 
            <form action="product/addBasket" method ="get"> 
            <input hidden type="text" name="id" value="<?=item[id]?>">
            <input type="submit" name="action" value="Купить"> 
            </form>
        </div>
        <?endforeach;?>        
    </div>