<?php
/**
 * Copyright 2011-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @category  Horde
 * @copyright 2011-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */

/**
 * Object containg POP3 fetch data.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2011-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Data_Fetch_Pop3 extends Horde_Imap_Client_Data_Fetch
{
    /**
     * Set UID.
     *
     * @param string $uid  The message UID. Unlike IMAP, this UID does not
     *                     have to be an integer.
     */
    public function setUid($uid)
    {
        $this->_data[Horde_Imap_Client::FETCH_UID] = strval($uid);
    }

}
