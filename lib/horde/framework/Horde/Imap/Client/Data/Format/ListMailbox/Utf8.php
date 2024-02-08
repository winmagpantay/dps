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
 * Object representation of an IMAP mailbox string used in a LIST command
 * when UTF8=ACCEPT is supported/enabled on the server (RFC 6855 [3]).
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2014-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Data_Format_ListMailbox_Utf8
extends Horde_Imap_Client_Data_Format_Mailbox_Utf8
{
    /**
     */
    protected function _filterParams()
    {
        $ob = parent::_filterParams();

        /* Don't quote % or * characters. */
        $ob->no_quote_list = true;

        return $ob;
    }

}
