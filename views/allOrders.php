<?php 
/** @var \app\model\Orders $order */
?>

<h2>Наименование:<?=$order->product?></h2>
<p>Артикул:<?=$order->description?></p>
<p>Цена:<?=$order->price?></p>
<p>Количество:<?=$order->quantity?></p>
<p>Имя:<?=$order->f_name?></p>
<p>Фамилия:<?=$order->s_name?></p>
<p>Адрес:<?=$order->address?></p>
<p>Индекс:<?=$order->post_index?></p>
<p>Электронная почта:<?=$order->email?></p>
<p>Дата заказа:<?=$order->date?></p>
<p>Время заказа:<?=$order->time?></p>


