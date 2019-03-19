<?php
foreach ($catalog as $item):?>

<a href="?c=product&a=card&id=<?=$item['id']?>">
<h2><?=$item['name']?></h2></a>
<p><?=$item['description']?></p>
<p>Стоимость: <?=$item['price']?></p>
<hr>
<?endforeach;?>