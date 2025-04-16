<?php 
<<<<<<< HEAD

=======
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88
namespace App\Router;

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\BasketController;
use App\Controllers\OrderController;
<<<<<<< HEAD
use App\Controllers\RegisterController;
=======
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88

class Router {
    public function route(string $url): string {
        $path = parse_url($url, PHP_URL_PATH);
        $pieces = explode("/", $path);
        //var_dump($pieces);
        $resource = $pieces[1];
        switch ($resource) {
            case "about":
                $about = new AboutController();
                return $about->get();
<<<<<<< HEAD
            case "order":
                $orderController = new OrderController();
                return $orderController->get();
            case "register":
                $registerController = new RegisterController();
                return $registerController->get();
            case 'basket_clear':
                $basketController = new BasketController();
                $basketController->clear();
                $prevUrl = $_SERVER['HTTP_REFERER'];
                header("Location: {$prevUrl}");
                return '';
            case "products":
                $productController = new ProductController();
                $id = (isset($pieces[3])) ? intval($pieces[3]) : null;
                return $productController->get($id);                
=======
            case "products":
                $products = new ProductController();
                $id = isset(($pieces[2])) ? intval($pieces[2]) : null;
                return $products->get($id);    
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88
            case "basket":
                $basketController = new BasketController();
                $basketController->add();
                $prevUrl = $_SERVER['HTTP_REFERER'];
<<<<<<< HEAD
                header("Location: {$prevUrl}");                    
                return "";
=======
                header("Location: {$prevUrl}"); 
                return "";  
            case 'order':
                $order = new OrderController();
                return $order->get();
            case "basket_clear":
                $basketController = new BasketController();
                $basketController->clear(); // Очищаем корзину
                $prevUrl = $_SERVER['HTTP_REFERER']; // Возвращаемся на предыдущую страницу
                header("Location: {$prevUrl}");
                return ""; // Возвращаем пустую строку   
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88
            default:
                $home = new HomeController();
                return $home->get();
        }
    }
}