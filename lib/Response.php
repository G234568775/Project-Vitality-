<?php

class Response
{
    public static function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    public static function error($message, $code = 400)
    {
        http_response_code($code);
        echo $message;
    }

    public static function success($message)
    {
        echo $message;
    }
}
