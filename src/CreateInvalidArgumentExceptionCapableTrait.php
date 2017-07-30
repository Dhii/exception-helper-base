<?php

namespace Dhii\Exception;

use Exception as RootException;

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
     * @param string        $message  The error message.
     * @param int           $code     The error code.
     * @param RootException $previous The inner exception for chaining, if any.
     * @param mixed         $argument The invalid argument, if any.
     *
     * @return InvalidArgumentExceptionInterface The new exception.
     */
    protected function _createInvalidArgumentException(
            $message = '',
            $code = 0,
            RootException $previous = null,
            $argument = null
    ) {
        return new InvalidArgumentException($message, $code, $previous, $argument);
    }
}
