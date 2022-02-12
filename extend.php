<?php

/*
 * This file is part of archlinux-de/click-image.
 *
 * Copyright (c) 2022 Pierre Schmitz.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ArchLinux\ClickImage;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    
    new Extend\Locales(__DIR__.'/locale'),
];
