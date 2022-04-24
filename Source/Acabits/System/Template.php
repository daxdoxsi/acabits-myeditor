<?php

namespace Acabits\System;

class Template
{
    public static function loadComponent(string $component, string $theme = 'base'): void
    {
        require __DIR__.'/../../../System/Themes/'.$theme.'/tpl/components/'.$component.'.tpl.php';
    }
}