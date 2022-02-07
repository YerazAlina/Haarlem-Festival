<?php

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
                require __DIR__ . '/views/homepage.php';
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
