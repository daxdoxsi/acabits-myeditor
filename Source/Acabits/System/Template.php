<?php

namespace Acabits\System;

class Template
{
    public static function loadComponent(string $component, string $theme = 'base'): string
    {
        require __DIR__.'/../../../System/Themes/'.$theme.'/'.$component.'.tpl.php';
    }
}