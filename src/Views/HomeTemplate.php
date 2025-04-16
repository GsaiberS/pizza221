<?php

namespace App\Views;

use App\Views\BaseTemplate;

class HomeTemplate extends BaseTemplate
{
<<<<<<< HEAD
    public static function getTemplate(): string
    {
        $template = parent::getTemplate();

        // Генерация HTML-кода для секции "Преимущества пиццерии"
        $advantages = [
            [
                'icon' => 'fa-solid fa-pizza-slice',
                'title' => 'Лучшие ингредиенты',
                'description' => 'Мы используем только свежие и качественные продукты.'
            ],
            [
                'icon' => 'fa-solid fa-truck-fast',
                'title' => 'Быстрая доставка',
                'description' => 'Доставляем горячую пиццу за 30 минут.'
            ],
            [
                'icon' => 'fa-solid fa-hand-holding-heart',
                'title' => 'Отличное обслуживание',
                'description' => 'Наша команда всегда рада помочь вам.'
            ],
            [
                'icon' => 'fa-solid fa-utensils',
                'title' => 'Уникальные рецепты',
                'description' => 'Попробуйте наши фирменные пиццы с секретными ингредиентами.'
            ],
            [
                'icon' => 'fa-solid fa-gift',
                'title' => 'Специальные предложения',
                'description' => 'Регулярные акции и скидки для наших клиентов.'
            ],
            [
                'icon' => 'fa-solid fa-leaf',
                'title' => 'Экологичность',
                'description' => 'Мы заботимся о природе и используем экологичную упаковку.'
            ]
        ];

        $advantageCards = '';
        foreach ($advantages as $advantage) {
            $advantageCards .= <<<HTML
<div class="col-md-4 col-lg-2" data-aos="fade-up">
    <div class="card advantage-card text-center h-100">
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <i class="{$advantage['icon']} fa-2x mb-3" style="color: #d09db0;"></i>
            <h6 class="card-title fw-bold">{$advantage['title']}</h6>
            <p class="card-text text-muted small">{$advantage['description']}</p>
        </div>
    </div>
</div>
HTML;
        }

        // Отзывы
        $reviews = [
            [
                'name' => 'Анна К.',
                'text' => 'Отличная пицца! Всегда свежая и вкусная. Рекомендую!',
                'rating' => 5
            ],
            [
                'name' => 'Иван П.',
                'text' => 'Быстрая доставка и приятные цены. Очень доволен!',
                'rating' => 4
            ],
            [
                'name' => 'Мария С.',
                'text' => 'Заказываю уже не первый раз. Качество на высоте!',
                'rating' => 5
            ]
        ];

        $reviewCards = '';
        foreach ($reviews as $review) {
            $stars = '';
            for ($i = 0; $i < $review['rating']; $i++) {
                $stars .= '<i class="fa-solid fa-star" style="color: #ffcc00;"></i>';
            }
            for ($i = $review['rating']; $i < 5; $i++) {
                $stars .= '<i class="fa-regular fa-star" style="color: #ffcc00;"></i>';
            }

            $reviewCards .= <<<HTML
<div class="col-md-4" data-aos="fade-up">
    <div class="card review-card h-100">
        <div class="card-body">
            <p class="card-text">{$review['text']}</p>
            <div class="d-flex align-items-center mt-3">
                <div class="me-2">{$stars}</div>
                <div class="fw-bold">{$review['name']}</div>
            </div>
        </div>
    </div>
</div>
HTML;
        }

        $content = <<<HTML
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, rgb(208,157,176), rgb(230,180,195));
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-section h1 {
        font-size: 48px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .hero-section p {
        font-size: 18px;
        margin-top: 10px;
    }

    .btn-custom {
        background: white;
        border: none;
        color: rgb(208,157,176);
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-custom:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(208,157,176, 0.3);
    }

    /* Advantages Section */
    .advantage-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .advantage-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    /* Reviews Section */
    .review-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    footer {
        background-color: #2c3e50;
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 3rem;
    }

    /* Анимации */
    [data-aos="fade-up"] {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    [data-aos="fade-up"].aos-animate {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<main class="container mt-5">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="text-center">
            <h1>Добро пожаловать в пиццерию!</h1>
            <p class="lead">Лучшие ингредиенты, лучший вкус.</p>
            <a href="#" class="btn btn-custom">Узнать больше</a>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="my-5">
        <h2 class="text-center mb-4">Почему выбирают нас?</h2>
        <div class="row g-4">
            {$advantageCards}
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="my-5">
        <h2 class="text-center mb-4">Отзывы наших клиентов</h2>
        <div class="row g-4">
            {$reviewCards}
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 Пиццерия. Все права защищены.</p>
</footer>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
HTML;

        $resultTemplate = sprintf($template, 'Главная', $content);
        return $resultTemplate;
    }
}
=======
   public static function getTemplate(array $pizza = []): string
   {
       $template = parent::getTemplate();
       // Путь к файлу data.json
       $filePath = __DIR__ . '/../../Storage/data.json';

       // Считываем содержимое файла и декодируем JSON
       if (file_exists($filePath)) {
           $jsonData = file_get_contents($filePath);
           $pizzas = json_decode($jsonData, true);

           // Проверяем, успешно ли декодирован JSON
           if (json_last_error() !== JSON_ERROR_NONE) {
               $pizzas = []; // Если ошибка, используем пустой массив
           }
       } else {
           $pizzas = []; // Если файл не найден, используем пустой массив
       }

       // Генерация HTML-кода для секции "Наши популярные пиццы"
       $pizzaCards = '';
       foreach ($pizzas as $pizza) {
           $pizzaCards .= <<<HTML

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-3">
      <img src="{$pizza['image']}" class="img-fluid rounded-start" alt="{$pizza['name']}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{$pizza['name']}</h5>
        <p class="card-text">{$pizza['description']}</p>
        <h5 class="card-title"><strong>Цена: </strong>{$pizza['price']} руб.</h5>
        <form class="mt-4" action="/basket" method="POST">
          <input type="hidden" name="id" value="{$pizza['id']}">
          <button type="submit" class="btn btn-custom">Добавить в корзину</button>
        </form>
      </div>
    </div>
  </div>
</div>




HTML;
       }

       $content = <<<HTML
       <style>
       body {
           font-family: 'Arial', sans-serif;
           background-color: #f8f9fa;
       }
       .navbar-brand img {
           transition: transform 0.3s ease;
       }
       .navbar-brand img:hover {
           transform: scale(1.1);
       }
       .hero-section {
           background: url('https://images.pexels.com/photos/708587/pexels-photo-708587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') no-repeat center center/cover;
           height: 400px;
           display: flex;
           align-items: center;
           justify-content: center;
           color: white;
           text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
       }
       .card-img-top {
           height: 150px; /* Уменьшенная высота изображения */
           width: 100%; /* Автоматическая ширина */
           object-fit: cover; /* Сохранение пропорций */
       }
       footer {
           background-color: #343a40;
           color: white;
           text-align: center;
           padding: 1rem 0;
           margin-top: 3rem;
       }
       .btn-custom {
           background-color: #ff6347;
           border-color: #ff6347;
       }
       .btn-custom:hover {
           background-color: #e65c40;
           border-color: #e65c40;
       }
       .welcome-container {
           background: url('https://i.pinimg.com/736x/74/42/df/7442df5010f9a71af522f38e787e3aea.jpg') no-repeat center center/cover;
           height: 400px; /* Высота контейнера */
           width: 1200px;
           display: flex;
           align-items: center; /* Вертикальное центрирование */
           justify-content: center; /* Горизонтальное центрирование */
           color: white; /* Цвет текста */
           text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Тень для текста */
           border-radius: 30px; /* Скругление углов */
           overflow: hidden; /* Убедитесь, что содержимое не выходит за границы */
       }   
       .btn-custom {
            background-color: rgb(160, 87, 114); /* Основной цвет кнопки */
            border-color: rgb(208,157,176); /* Цвет границы */
            color: #ffffff; /* Цвет текста */
        }
        .btn-custom:hover {
            background-color: rgb(180,130,150); /* Цвет при наведении */
            border-color: rgb(180,130,150); /* Цвет границы при наведении */
            color: #ffffff; /* Цвет текста */
        }        
   </style>
   <main class="container mt-4">
   <section class="hero-section">
   <div class="welcome-container">
       <div class="text-center">
           <h1 class="display-4 fw-bold">Добро пожаловать в пиццерию!</h1>
           <p class="lead">Лучшие ингредиенты, лучший вкус.</p>
           <a href="http://localhost/products" class="btn btn-custom">Заказать сейчас</a>
       </div>
   </div>
</section>

       <section class="my-5">
           <h2 class="text-center mb-4">Наши популярные пиццы</h2>
           <div class="row row-cols-1 row-cols-md-3 g-4">
               {$pizzaCards}
           </div>
       </section>
   </main>
HTML;

       $resultTemplate = sprintf($template, 'Главная', $content);
       return $resultTemplate;
   }
}
>>>>>>> 81eb876697f261033b16b1a38438cc72dbad5f88
