<?php

if (!function_exists('mixing')) {
    function mixing($path)
    {
        return url(mix($path));
    }
}

if (!function_exists('isActive')) {
    function isActive($href, $class = 'active')
    {
        return (strpos(Route::currentRouteName(), $href) === 0 ? $class : '');
    }
}
