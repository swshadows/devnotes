<?
class Render {
    public static function renderPage($filename) {
        // Check if its index
        if ($filename == '/') {
            $filename = 'index';
        }

        // Define app root folder
        $file = __APP_ROOT__ . '/src/views/' . $filename . '.php';

        // Redirects to 404 page
        if (!file_exists($file)) {
            $file = __APP_ROOT__ . '/src/views/404.php';
        }

        require_once($file);
    }
}