# Dhii - Exception - Helper - Base

[![Build Status](https://travis-ci.org/Dhii/exception-helper-base.svg?branch=master)](https://travis-ci.org/Dhii/exception-helper-base)
[![Code Climate](https://codeclimate.com/github/Dhii/exception-helper-base/badges/gpa.svg)](https://codeclimate.com/github/Dhii/exception-helper-base)
[![Test Coverage](https://codeclimate.com/github/Dhii/exception-helper-base/badges/coverage.svg)](https://codeclimate.com/github/Dhii/exception-helper-base/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/exception-helper-base/version)](https://packagist.org/packages/dhii/exception-helper-base)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Base functionality for exception helpers.

## Traits
- [`CreateExceptionCapableTrait`][CreateExceptionCapableTrait] - Creates the most basic Dhii exception.
- [`CreateInvalidArgumentExceptionCapableTrait`][CreateInvalidArgumentExceptionCapableTrait] - Creates a Dhii Invalid Argument exception.
- [`CreateOutOfBoundsExceptionCapableTrait`][CreateOutOfBoundsExceptionCapableTrait] - Creates a Dhii Out Of Bounds exception.
- [`CreateOutOfRangeExceptionCapableTrait`][CreateOutOfRangeExceptionCapableTrait] - Creates a Dhii Out Of Range exception.
- [`CreateRuntimeExceptionCapableTrait`][CreateRuntimeExceptionCapableTrait] Creates a Dhii Runtime exception.

For more information about the exceptions please see [`dhii/exception`][dhii/exception];

[Dhii]: https://github.com/Dhii/dhii

[dhii/exception]:                                       https://packagist.org/packages/dhii/exception

[CreateExceptionCapableTrait]:                          src/CreateExceptionCapableTrait.php
[CreateInvalidArgumentExceptionCapableTrait]:           src/CreateInvalidArgumentExceptionCapableTrait.php
[CreateOutOfBoundsExceptionCapableTrait]:               src/CreateOutOfBoundsExceptionCapableTrait.php
[CreateOutOfRangeExceptionCapableTrait]:                src/CreateOutOfRangeExceptionCapableTrait.php
[CreateRuntimeExceptionCapableTrait]:                   src/CreateRuntimeExceptionCapableTrait.php
