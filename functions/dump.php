<?php

if (!function_exists('dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        echo "<pre>";

        print_r($var);
        foreach ($moreVars as $v) {
            echo PHP_EOL;
            print_r($v);
        }

        echo "</pre>";
    }
}

if (!function_exists('dd')) {
    /**
     * @return never
     */
    function dd(...$vars)
    {
        if (!in_array(\PHP_SAPI, ['cli', 'phpdbg'], true) && !headers_sent()) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        dump($vars);

        exit(1);
    }
}
