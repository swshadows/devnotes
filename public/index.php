<?
define('__APP_ROOT__', dirname(__DIR__));
define('__APP_SRC__', __APP_ROOT__ . '/src');
define('__APP_PUBLIC__', __APP_ROOT__ . '/public');

require_once __APP_SRC__ . '/routes/routes.php';

$render = Router::route($_SERVER['REQUEST_URI']);

require_once __APP_SRC__ . $render;
