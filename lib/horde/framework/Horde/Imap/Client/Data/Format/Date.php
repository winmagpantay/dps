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
 * Object representation of an IMAP date string (RFC 3501 [9]).
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Data_Format_Date extends Horde_Imap_Client_Data_Format
{
    /**
     * Constructor.
     *
     * @param mixed $data  Either a DateTime object, or a date format that
     *                     can be converted to a DateTime object.
     *
     * @throws Exception
     */
    public function __construct($data)
    {
        if (!($data instanceof DateTime)) {
            $data = new Horde_Imap_Client_DateTime($data);
        }

        parent::__construct($data);
    }

    /**
     */
    public function __toString()
    {
        return $this->_data->format('j-M-Y');
    }

}
