<?php

namespace App\Models;
use App\Config\Config;

class Product{

public function loadData(): ?array
    {
        $file = fopen(Config::FILE_PRODUCTS, 'r');
            if (!$file){
                return null;
            }
        
        $data = fread($file, filesize(Config::FILE_PRODUCTS));
        
        fclose($file);
        
        $arr = json_decode($data, true);
        
        return $arr;
    }

public function getBasketData(): array {
   session_start();
   if (!isset($_SESSION['basket'])) {
       $_SESSION['basket'] = [];
   }
   $products = $this->loadData();
   $basketProducts = [];

   foreach ($products as $product) {
       $id = $product['id'];

       if (array_key_exists($id, $_SESSION['basket'])) {
           // количество товара берем то что указано в корзине
           $quantity = $_SESSION['basket'][$id]['quantity'];

           // остальные характеристики берем из массива всех товаров
           $name = $product['name'];
           $price = $product['price'];

           // сумму вычислим 
           $sum  = $price * $quantity;

           // добавим в новый массив
           $basketProducts[] = array( 
               'id' => $id, 
               'name' => $name, 
               'quantity' => $quantity,
               'price' => $price,
               'sum' => $sum,
           );
       }
   }
   return $basketProducts;
}


    
}