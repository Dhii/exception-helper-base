<?php

namespace Dhii\Exception;

use Exception as RootException;

/**
 * Functionality for creating the most basic Dhii exceptions.
 *
 * @since [*next-version*]
 */
trait CreateExceptionCapableTrait
{
    /**
     * Creates a new basic Dhii exception.
     *
     * @since [*next-version*]
     *
     * @param string        $message  The error message.
     * @param int           $code     The error code.
     * @param RootException $previous The inner exception for chaining, if any.
     *
     * @return ThrowableInterface The new exception.
     */
    protected function _createException($message = '', $code = 0, $previous = null)
    {
        return new Exception($message, $code, $previous);
    }
}
