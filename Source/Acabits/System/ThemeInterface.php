<?php

namespace Acabits\System;

interface ThemeInterface
{

    const theme_parent = null;
    const theme_version = 1.0;
    const theme_name = 'base';
    const php_min_version = 7.4;

    function install(): bool;

    function enable(): bool;

    function disable(): bool;

    function uninstall(): bool;

    function cache_validate(): bool;

    function pre_render(): bool;

    function render(): bool;

    function update_cache(): bool;

}