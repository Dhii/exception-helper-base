<?php

namespace Dhii\Exception;

use Exception as RootException;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Functionality for creating Dhii Out of Bounds exceptions.
 *
 * @since [*next-version*]
 */
trait CreateOutOfBoundsExceptionCapableTrait
{
    /**
     * Creates a new Dhii Out Of Bounds exception.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable|null $message  The error message, if any.
     * @param int|null               $code     The error code, if any.
     * @param RootException|null     $previous The inner exception for chaining, if any.
     * @param mixed|null             $argument The invalid argument, if any.
     *
     * @return OutOfBoundsException The new exception.
     */
    protected function _createOutOfBoundsException(
            $message = null,
            $code = null,
            RootException $previous = null,
            $argument = null
    ) {
        return new OutOfBoundsException($message, $code, $previous, $argument);
    }
}
