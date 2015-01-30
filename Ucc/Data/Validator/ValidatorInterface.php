<?php

namespace Ucc\Data\Validator;

/**
 * Ucc\Data\Validator\ValidatorInterface
 *
 * @author Kris Rybak <kris@krisrybak.com>
 */
interface ValidatorInterface
{
    /**
     * Returns list of current checks
     *
     * @return array
     */
    public function getChecks();

    /**
     * Sets multiple checks for a given fields
     *
     * @param   array   $checks List of checks as field => criteria
     * @return  ValidatorInterface
     */
    public function setChecks(array $checks);

    /**
     * Sets checks for a given field
     *
     * @param   string  $field  Name of the input to perform the check on
     * @param   array   $check  Array of criteria
     * @return  ValidatorInterface
     */
    public function addCheck($field, array $check);

    /**
     * Returns given check
     *
     * @param   string  $field
     */
    public function getCheck($field);

    /**
     * Removes given check
     *
     * @param   string  $field
     * @return  ValidatorInterface
     */
    public function removeCheck($field);

    /**
     * Clears list of checks
     *
     * @return  ValidatorInterface
     */
    public function clearChecks();

    /**
     * Performs checks
     *
     * @return boolean  True on complete validation, otherwise false
     */
    public function check();

    /**
     * Alias of check()
     *
     * @return boolean  True on complete validation, otherwise false
     */
    public function validate();
}
