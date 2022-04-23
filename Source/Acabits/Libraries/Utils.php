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

    public static function is_cli(): bool
    {
        if( defined('STDIN') )
        {
            return true;
        }

        if( empty($_SERVER['REMOTE_ADDR']) and
            !isset($_SERVER['HTTP_USER_AGENT']) and
            count($_SERVER['argv']) > 0)
        {
            return true;
        }

        return false;
    }

}