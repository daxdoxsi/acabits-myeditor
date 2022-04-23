<?php

namespace Acabits\System;

interface PluginInterface {

    const version_plugin = '1.0';
    const version_php = '7.4';

    public static function install(): bool;
    public static function disable(): bool;
    public static function uninstall(): bool;


}