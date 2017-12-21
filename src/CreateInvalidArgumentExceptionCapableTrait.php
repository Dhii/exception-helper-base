<?php

namespace Dhii\Exception;

use Exception as RootException;
use Dhii\Util\String\StringableInterface as Stringable;
use InvalidArgumentException as BaseInvalidArgumentException;

/**
 * Functionality for creating Dhii invalid argument exceptions.
 *
 * @since [*next-version*]
 */
trait CreateInvalidArgumentExceptionCapableTrait
{
    /**
     * Creates a new Dhii invalid argument exception.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable|null $message  The error message, if any.
     * @param int|null               $code     The error code, if any.
     * @param RootException|null     $previous The inner exception for chaining, if any.
     * @param mixed|null             $argument The invalid argument, if any.
     *
     * @return InvalidArgumentException The new exception.
     */
    protected function _createInvalidArgumentException(
            $message = null,
            $code = null,
            RootException $previous = null,
            $argument = null
    ) {
        return new InvalidArgumentException($message, $code, $previous, $argument);
    }
}
