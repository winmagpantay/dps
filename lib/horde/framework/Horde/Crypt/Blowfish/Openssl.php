<?php
/**
 * Copyright 2012-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see https://www.horde.org/licenses/lgpl21.
 *
 * @author   Michael Slusarz <slusarz@horde.org>
 * @category Horde
 * @license  https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package  Crypt_Blowfish
 */

/**
 * Openssl driver for blowfish encryption.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2012-2017 Horde LLC
 * @license   https://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package   Crypt_Blowfish
 */
class Horde_Crypt_Blowfish_Openssl extends Horde_Crypt_Blowfish_Base
{
    /**
     */
    public static function supported()
    {
        if (extension_loaded('openssl')) {
            $ciphers = openssl_get_cipher_methods();
            return  in_array('bf-ecb', $ciphers) && in_array('bf-cbc', $ciphers);
        }

        return false;
    }

    /**
     */
    public function encrypt($text)
    {
        if (PHP_VERSION_ID <= 50302) {
            return @openssl_encrypt($text, 'bf-' . $this->cipher, $this->key, true);
        } elseif (PHP_VERSION_ID == 50303) {
            // Need to mask error output, since an invalid warning message was
            // issued prior to 5.3.4 for empty IVs in ECB mode.
            return @openssl_encrypt($text, 'bf-' . $this->cipher, $this->key, true, strval($this->iv));
        }

        return openssl_encrypt($text, 'bf-' . $this->cipher, $this->key, true, strval($this->iv));
    }

    /**
     */
    public function decrypt($text)
    {
        return (PHP_VERSION_ID <= 50302)
            ? openssl_decrypt($text, 'bf-' . $this->cipher, $this->key, true)
            : openssl_decrypt($text, 'bf-' . $this->cipher, $this->key, true, strval($this->iv));
    }

}
