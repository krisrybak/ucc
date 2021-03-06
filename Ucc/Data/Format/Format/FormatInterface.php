<?php

namespace Ucc\Data\Format\Format;

/**
 * Ucc\Data\Format\Format\FormatInterface
 *
 * @author Kris Rybak <kris@krisrybak.com>
 */
interface FormatInterface
{
    /**
     * Gets format.
     *
     * @return string
     */
    public function getFormat();

    /**
     * Alias of getFormat().
     *
     * @return string
     */
    public function format();

    /**
     * Sets format.
     *
     * @param   string  $format
     * @return  Ucc\Data\Format\Format\Format
     */
    public function setFormat($format);

    /**
     * Turns Format into string in the following format: {format}
     *
     * @return string
     */
    public function toString();
}
