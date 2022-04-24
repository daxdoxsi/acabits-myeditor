<?php

use Acabits\Libraries\Utils;

# Loading libraries
require __DIR__.'/../Source/Acabits/Libraries/Utils.php';

# Loading Classes
require __DIR__.'/../Source/Acabits/System/Template.php';

if (Utils::is_cli())
    require __DIR__.'/Shell/shell_main.php';
else
    require __DIR__.'/Engine/main_controller.inc.php';