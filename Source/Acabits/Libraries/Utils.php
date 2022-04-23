<?php

namespace Acabits\Libraries;

class Utils
{
    public static function debug(mixed $var, bool $extra = true): string
    {
        if ($extra) {
            ob_start();
            var_dump($var);
            $out = ob_get_contents();
            ob_end_clean();
        }
        else {
            $out = print_r($var, true);
        }
        return '<pre>'.highlight_string($out).'</pre>';
    }

}