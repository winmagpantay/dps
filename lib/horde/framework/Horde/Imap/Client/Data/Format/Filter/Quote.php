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
 * Stream filter to output a quoted IMAP string.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Imap_Client
 */
class Horde_Imap_Client_Data_Format_Filter_Quote extends php_user_filter
{
    /**
     * Has the initial quote been prepended?
     *
     * @var boolean
     */
    protected $_prepend;

    /**
     */
    #[ReturnTypeWillChange]
    public function onCreate()
    {
        $this->_prepend = false;
    }

    /**
     * @see stream_filter_register()
     */
    #[ReturnTypeWillChange]
    public function filter($in, $out, &$consumed, $closing)
    {
        if (!$this->_prepend) {
            stream_bucket_append($out, stream_bucket_new($this->stream, '"'));
            $this->_prepend = true;
        }

        while ($bucket = stream_bucket_make_writeable($in)) {
            $consumed += $bucket->datalen;
            $bucket->data = addcslashes($bucket->data, '"\\');
            stream_bucket_append($out, $bucket);
        }

        /* feof() call needed due to:
         * https://news.php.net/php.internals/80363 */
        if ($closing || feof($this->stream)) {
            stream_bucket_append($out, stream_bucket_new($this->stream, '"'));
        }

        return PSFS_PASS_ON;
    }

}
