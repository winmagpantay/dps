<?php
/**
 * Copyright 2012-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */

/**
 * Exception thrown for mailbox synchronization errors.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Exception_Sync extends Horde_Exception_Wrapped
{
    /* Error message codes. */

    /**
     * Token could not be parsed.
     */
    const BAD_TOKEN = 1;

    /**
     * UIDVALIDITY of the mailbox changed.
     */
    const UIDVALIDITY_CHANGED = 2;

}
