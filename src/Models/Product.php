<<<<<<< HEAD
<?php 
namespace App\Models;

use App\Configs\Config;
use App\Services\ILoadStorage;
use PhpParser\Node\Expr\Cast\Bool_;
use App\Services\ISaveStorage;
class Product {
    private ILoadStorage $dataStorage;
    private string $nameResource;
    
    // Внедряем зависимость через конструктор
    public function __construct(ILoadStorage $service, string $name)
    {
        $this->dataStorage = $service;
        $this->nameResource = $name;
    }

    public function loadData(): ?array {
        return $this->dataStorage->loadData( $this->nameResource ); 
    }

    public function getBasketData(): array {
        if(!isset($_SESSION))
        {
            session_start();
        }

        if (!isset($_SESSION['basket'])) {
            $_SESSION['basket'] = [];
        }
        $products = $this->loadData();
        $basketProducts= [];
//var_dump($_SESSION['basket']);
        foreach ($products as $product) {
            $id = $product['id'];

            if (array_key_exists($id, $_SESSION['basket'])) {
                // количество товара берем то что указано в корзине
                $quantity = $_SESSION['basket'][$id]['quantity'];

                // остальные характеристики берем из массива всех товаров
                $name = $product['name'];
                $price= $product['price'];

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

=======
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


    
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88
}