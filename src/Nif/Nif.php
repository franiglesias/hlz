<?php

namespace Dojo\Nif;

use InvalidArgumentException;

/**
 * Class Nif
 * @package Dojo\Nif
 */
class Nif
{
    /** @var int */
    private $value;

    /**
     * Nif constructor.
     * @param string $nif
     * @throws InvalidArgumentException
     */
    public function __construct(string $nif)
    {
        if (! preg_match('/^[0-9XYZ]\d{7,7}[A-Z]$/', $nif)) {
            throw new InvalidArgumentException(sprintf('%s is malformed', $nif));
        }

        $numberPart = substr($nif, 0, 8);
        $modulus = (int) $numberPart % 23;
        if ($modulus !== 0 && substr($nif, -1) === 'T') {
            throw new InvalidArgumentException(sprintf('%s is invalid', $nif));
        }
        $this->value = $nif;
    }

    public function value()
    {
        return $this->value;
    }
}
