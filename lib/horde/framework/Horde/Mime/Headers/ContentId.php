<?php
/**
 * Copyright 2015-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @category  Horde
 * @copyright 2015-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Mime
 */

/**
 * This class represents the Content-ID header value (RFC 2045 [7]).
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2015-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Mime
 * @since     2.8.0
 */
class Horde_Mime_Headers_ContentId
extends Horde_Mime_Headers_Element_Single
implements Horde_Mime_Headers_Extension_Mime
{
    /**
     * Creates a Content-ID header conforming to RFC 2045 [7].
     *
     * @return Horde_Mime_Headers_ContentId  Content-ID header object.
     */
    public static function create()
    {
        return new self(
            null,
            strval(new Horde_Support_Randomid()) . '@' . gethostname()
        );
    }

    /**
     */
    public function __construct($name, $value)
    {
        parent::__construct('Content-ID', $value);
    }

    /**
     */
    protected function _setValue($value)
    {
        parent::_setValue($value);

        $val = $this->value;
        $cid = '<' . ltrim(rtrim($val, '>'), '<') . '>';

        if ($cid !== $val) {
            parent::_setValue($cid);
        }
    }

    /**
     */
    public static function getHandles()
    {
        return array(
            'content-id'
        );
    }

}
