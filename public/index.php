<?php
require '../vendor/autoload.php';
define('VIEW_PATH', dirname(__DIR__) . '/views');
    require VIEW_PATH . '/layouts/header.php';

$router = new AltoRouter();

$router->map('GET', '/blog', function () {
    require VIEW_PATH .'/post/index.php';
});
$router->map('GET', '/blog/category', function () {
    require VIEW_PATH . '/category/show.php';
});

$match = $router->match();

if (is_array($match)) {
    $match['target']();
} else {
    echo 'ERROR 404';
}

require VIEW_PATH . '/layouts/footer.php';