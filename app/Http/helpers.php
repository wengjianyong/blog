<?php

if (!function_exists('setting')) {
    /**
     * @param $key
     * @param mixed $default
     * @return mixed
     */
    function setting($key, $default = null)
    {
        return array_get(app('settings'), $key, $default);
    }
}