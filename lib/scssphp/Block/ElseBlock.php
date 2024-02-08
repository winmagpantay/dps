<?php

/**
 * SCSSPHP
 *
 * @copyright 2012-2020 Leaf Corcoran
 *
 * @license https://opensource.org/licenses/MIT MIT
 *
 * @link https://scssphp.github.io/scssphp
 */

namespace ScssPhp\ScssPhp\Block;

use ScssPhp\ScssPhp\Block;
use ScssPhp\ScssPhp\Type;

/**
 * @internal
 */
class ElseBlock extends Block
{
    public function __construct()
    {
        $this->type = Type::T_ELSE;
    }
}
