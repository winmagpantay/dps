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
 * Exception thrown if search query text cannot be converted to different
 * charset.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Exception_SearchCharset
extends Horde_Imap_Client_Exception
{
    /**
     * Charset that was attempted to be converted to.
     *
     * @var string
     */
    public $charset;

    /**
     * Constructor.
     *
     * @param string $charset  The charset that was attempted to be converted
     *                         to.
     */
    public function __construct($charset)
    {
        $this->charset = $charset;

        parent::__construct(
            Horde_Imap_Client_Translation::r("Cannot convert search query text to new charset"),
            self::BADCHARSET
        );
    }

}
