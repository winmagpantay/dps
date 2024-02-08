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
 * Object representation of an IMAP data format (RFC 3501 [4]).
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Data_Format
{
    /**
     * Data.
     *
     * @var mixed
     */
    protected $_data;

    /**
     * Constructor.
     *
     * @param mixed $data  Data.
     */
    public function __construct($data)
    {
        $this->_data = is_resource($data)
            ? stream_get_contents($data, -1, 0)
            : $data;
    }

    /**
     * Returns the string value of the raw data.
     *
     * @return string  String value.
     */
    public function __toString()
    {
        return strval($this->_data);
    }

    /**
     * Returns the raw data.
     *
     * @return mixed  Raw data.
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Returns the data formatted for output to the IMAP server.
     *
     * @return string  IMAP escaped string.
     */
    public function escape()
    {
        return strval($this);
    }

    /**
     * Verify the data.
     *
     * @throws Horde_Imap_Client_Data_Format_Exception
     */
    public function verify()
    {
    }

}
