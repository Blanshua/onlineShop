<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн-магазин сладостей</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Delicious sweets</div>
        <div id="navWrap">
            <a href="#">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>
    
 
<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'SUN',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium',
            'img' => '/image/4.jpg',
            'price' => '9 $'
        ],
        [
            'id' => 2,
            'name' => 'MOON',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium',
            'img' => '/image/5.jpg',
            'price' => '7 $'
        ],
        [
            'id' => 3,
            'name' => 'STAR',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium',
            'img' => '/image/6.jpg',
            'price' => '8 $'
        ],
    ];

    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }
?>

        
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="image/envelope.svg" class="contactIcon">
                
                info@DeliciousSweets
            </div>
            <div class="contactWrap">
                <img src="image/phone-call.svg" class="contactIcon">
                8 800 000 00 00
            </div>
            <div class="contactWrap">
                <img src="image/placeholder.svg" class="contactIcon">
               Киев, ул. Киевская 1а, офис 1
            </div>
        </div>

        <div id="footerNav">
            <a href="#">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="image/vk-social-logotype.svg">
            <img class="socialItem" src="image/google-plus-social-logotype.svg">
            <img class="socialItem" src="image/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy;Delicious sweets 2017 </div>
    </div>
</footer>

</body>
</html>