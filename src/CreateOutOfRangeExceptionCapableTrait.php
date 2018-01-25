<?php

namespace Dhii\Exception;

use Exception as RootException;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Functionality for creating Dhii Out of Range exceptions.
 *
 * @since [*next-version*]
 */
trait CreateOutOfRangeExceptionCapableTrait
{
    /**
     * Creates a new Dhii Out Of Range exception.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable|null $message  The error message, if any.
     * @param int|null               $code     The error code, if any.
     * @param RootException|null     $previous The inner exception for chaining, if any.
     * @param mixed|null             $argument The invalid argument, if any.
     *
     * @return OutOfRangeException The new exception.
     */
    protected function _createOutOfRangeException(
            $message = null,
            $code = null,
            RootException $previous = null,
            $argument = null
    ) {
        return new OutOfRangeException($message, $code, $previous, $argument);
    }
}
