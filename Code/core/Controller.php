<?php

class Controller
{
    protected function render($view, $data = []) { //outputs page's php and any given data if they are provided and exist
        extract($data);
        $viewFile = __DIR__ . '/../app/views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else { //in case there isnt such a file;
            header("HTTP/1.0 404 Not Found");
            echo '404 Not Found';
        }
    }

    protected function redirect($url) { //no idea what it does suggesting im doing something wrong
        header("Location: $url");
        exit;
    }
}
