<?php

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
                require __DIR__ . '/views/cms/homecms.php';
                break;
            case 'login':
                require __DIR__ . '/views/cms/login.php';
                break;
            case 'logout':
                require __DIR__ . '/views/cms/logout.php';
                break;
            case 'homecms':
                require __DIR__ . '/views/cms/homecms.php';
                break;
            case 'dashboard':
                require __DIR__ . '/views/cms/dashboard.php';
                break;
            case 'updateprogra':
                require __DIR__ . '/views/cms/updateprogram.php';
                //hlkhk
                break;
            default:
                echo '404 not found ';
                http_response_code(404);
        }
    }
}
