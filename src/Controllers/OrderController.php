<?php

namespace App\Controllers;

use App\Models\Product;
use App\Views\OrderTemplate;

class OrderController {
    public function get(): string {
        $productModel = new Product();

        $data = $productModel->getBasketData();

        $orderTemplate = new OrderTemplate();

        return $orderTemplate->getOrderTemplate($data);
    }
}