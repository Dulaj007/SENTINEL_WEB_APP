<?php

if (! function_exists('set_active')) {
    function set_active($route)
{
    $uri = service('uri');
    $current = $uri->getPath();

    return strpos($current, $route) === 0 ? 'border-b-2 border-[var(--color-yellow)] text-[var(--color-white)]' : 'text-[var(--color-white-80)]';
}

}
