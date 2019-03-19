<?php
foreach ($catalogOrders as $item):?>

<a href="?c=order&a=card&id=<?=$item['id']?>">
<h2><?=$item['product']?></h2></a>
<p><?=$item['product_id']?></p>
<p>Стоимость: <?=$item['price']?></p>
<hr>
<?endforeach;?>