<?php

/**
 * @see       https://github.com/laminas/laminas-authentication for the canonical source repository
 * @copyright https://github.com/laminas/laminas-authentication/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-authentication/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Authentication\Adapter\Http\Exception;

use Laminas\Authentication\Adapter\Exception;

/**
 * @category   Laminas
 * @package    Laminas_Authentication
 * @subpackage Adapter_Http
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements
    ExceptionInterface
{
}
