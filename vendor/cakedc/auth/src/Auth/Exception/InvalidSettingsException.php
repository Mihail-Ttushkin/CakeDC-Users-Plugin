<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace CakeDC\Auth\Auth\Exception;

use Cake\Core\Exception\Exception;

class InvalidSettingsException extends Exception
{
    protected $_messageTemplate = 'Invalid settings for key (%s)';
    protected $code = 500;
}
