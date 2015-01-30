<?php

namespace Ucc\Data\Validator;

/**
 * Ucc\Data\Validator\Validator
 * Validates data.
 *
 * @author Kris Rybak <kris@krisrybak.com>
 */
class Validator implements ValidatorInterface
{
    /**
     * List of checks to perform
     *
     * @var array
     */
    private $checks = array();

    /**
     * Current error
     *
     * @var mixed
     */
    private $error;

    /**
     * List of cleared values
     *
     * @var array
     */
    private $values = array();

    /**
     * List of input data in pair of name => value
     *
     * @var array
     */
    private $inputData = array();
}
