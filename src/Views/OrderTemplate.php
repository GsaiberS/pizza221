<?php

namespace App\Views;
use App\Views\BaseTemplate;

class OrderTemplate extends BaseTemplate
{
   public static function getOrderTemplate(array $arr): string
   {
       $template = parent::getTemplate();
       $title = 'Создание заказа';
       $content = <<<HTML
       <h1 class="mb-5">Создание заказа</h1>
       <h3>Корзина</h3>
       HTML;

       $all_sum = 0;
       foreach ($arr as $product) {
           $name = $product['name'];
           $price = $product['price'];
           $quantity = $product['quantity'];

           $sum = $price * $quantity;
           $all_sum += $sum;

           $content .= <<<LINE
           <div class="row">
               <div class="col-6">
               {$name}
               </div>
               <div class="col-2">
               {$quantity} ед. x {$price} руб.
               </div>
               <div class="col-2">
               {$sum} ₽
               </div>
           </div>
           LINE;
       }

       if ($all_sum > 0) {
           $content .= <<<LINE
           <div class="row">
               <div class="col-6">
               Итого:
               </div>
               <div class="col-2">
               </div>
               <div class="col-2">
               {$all_sum} ₽
               </div>
           </div>
           LINE;
       } else {
           $content .= <<<LINE
           <div class="row">
               <div class="col-12">
               - нет добавленных товаров -
               </div>
           </div>
           LINE;
       }

       $content .= <<<HTML
       <div class="row">
           <div class="col-6">
                
           </div>
           <div class="col-6 float-end">
               <form action="/basket_clear" method="POST">
               <button type="submit" class="btn btn-secondary mt-3">Очистить корзину</button>
               </form>
           </div>
       </div>    
       HTML;

       $resultTemplate = sprintf($template, $title, $content);
       return $resultTemplate;
   }
}
