<?php
/**
 * Copyright 2014-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @category  Horde
 * @copyright 2014-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */

/**
 * Extend nstring element to allow for non-ASCII characters.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2014-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 * @since     2.25.0
 */
class Horde_Imap_Client_Data_Format_Nstring_Nonascii
extends Horde_Imap_Client_Data_Format_Nstring
implements Horde_Imap_Client_Data_Format_String_Support_Nonascii
{
}
