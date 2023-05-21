<?php

function url(string $path = null): string
{
    $url = isset($_SERVER['HTTPS']) ? 'https' : 'http';
    $url .= '://';
    $url .= $_SERVER['HTTP_HOST'];
    if (isset($path)) {
        $url .= '/';
        $url .= $path;
    }
    return $url;
}

function alart (string $message, string $color = 'success'): string
{
    return "<div class='d-block py-2 alert alert-$color'>
                $message
            </div>";
}