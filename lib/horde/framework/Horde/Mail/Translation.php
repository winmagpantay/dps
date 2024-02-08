<?php
/**
 * Copyright 2014-2017 Horde LLC (https://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (BSD). If you
 * did not receive this file, see https://www.horde.org/licenses/bsd.
 *
 * @category  Horde
 * @copyright 2014-2017 Horde LLC
 * @license   https://www.horde.org/licenses/bsd New BSD License
 * @package   Mail
 */

/**
 * Translation wrapper for the Horde_Mail package.
 *
 * @author    Michael Slusarz <slusarz@horde.org>
 * @category  Horde
 * @copyright 2014-2017 Horde LLC
 * @license   https://www.horde.org/licenses/bsd New BSD License
 * @package   Mail
 * @since     2.5.0
 */
class Horde_Mail_Translation extends Horde_Translation_Autodetect
{
    /**
     * The translation domain
     *
     * @var string
     */
    protected static $_domain = 'Horde_Mail';

    /**
     * The absolute PEAR path to the translations for the default gettext handler.
     *
     * @var string
     */
    protected static $_pearDirectory = '@data_dir@';
}
