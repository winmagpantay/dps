<?php
/**
 * Exception handler for the Horde_Secret library.
 *
 * Copyright 2010-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @author   Michael Slusarz <slusarz@horde.org>
 * @category Horde
 * @license  https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package  Secret
 */
class Horde_Secret_Exception extends Horde_Exception_Wrapped
{
    // Error codes.
    const NO_BLOWFISH_LIB = 0; // 0 for BC
    const KEY_NOT_STRING = 2;
    const KEY_ZERO_LENGTH = 3;
}
