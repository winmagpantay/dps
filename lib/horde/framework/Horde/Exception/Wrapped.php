<?php
/**
 * Copyright 2008-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @author   
 * @category Horde
 * @license  https://www.horde.org/licenses/lgpl21 LGPL
 * @package  Exception
 */

/**
 * Horde exception class that can wrap and set its details from PEAR_Error,
 * Exception, and other objects with similar interfaces.
 *
 * @author    
 * @category  Horde
 * @copyright 2008-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL
 * @package   Exception
 */
class Horde_Exception_Wrapped extends Horde_Exception
{
    /**
     * Exception constructor.
     *
     * @param mixed $message The exception message, a PEAR_Error
     *                       object, or an Exception object.
     * @param int   $code    A numeric error code.
     */
    public function __construct($message = null, $code = 0)
    {
        $previous = null;
        if (is_object($message) &&
            method_exists($message, 'getMessage')) {
            if (empty($code) &&
                method_exists($message, 'getCode')) {
                $code = (int)$message->getCode();
            }
            if ($message instanceof Exception) {
                $previous = $message;
            }
            if (method_exists($message, 'getUserinfo') &&
                $details = $message->getUserinfo()) {
                $this->details = $details;
            } elseif (!empty($message->details)) {
                $this->details = $message->details;
            }
            $message = (string)$message->getMessage();
        }

        parent::__construct($message, $code, $previous);
    }
}
