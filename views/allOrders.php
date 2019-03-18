<?php 
/** @var \app\model\Orders $order */
?>

<div class="card" style="width: 18rem;">
  <img src="https://img.povar.ru/main/8e/b1/d4/01/picca_myasnaya-387507.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title"><?=$order->product?></h2>
    <p class="card-text">Артикул:<?=$order->product_id?></p>
<p class="card-text">Цена:<?=$order->price?></p>
<p class="card-text">Количество:<?=$order->quantity?></p>
<p class="card-text">Имя:<?=$order->f_name?></p>
<p class="card-text">Фамилия:<?=$order->s_name?></p>
<p class="card-text">Адрес:<?=$order->address?></p>
<p class="card-text">Индекс:<?=$order->post_index?></p>
<p class="card-text">Электронная почта:<?=$order->email?></p>
<p class="card-text">Дата заказа:<?=$order->date?></p>
<p class="card-text">Время заказа:<?=$order->time?></p>
    <a href="#" class="btn btn-primary">Купить</a>
  </div>
</div>
