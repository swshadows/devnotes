<?
define('__APP_ROOT__', dirname(__DIR__));
define('__APP_SRC__', __APP_ROOT__ . '/src');
define('__APP_PUBLIC__', __APP_ROOT__ . '/public');

require_once __APP_ROOT__ . '/src/controllers/renderController.php';

$route = explode('?', $_SERVER['REQUEST_URI']);

Render::renderPage($route[0]);
