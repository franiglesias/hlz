<?php

namespace Dojo\Nif;

use InvalidArgumentException;

class Nif
{
    public function __construct(string $nif)
    {
        if (\strlen($nif) > 9) {
            throw new InvalidArgumentException('Too many chars');
        }
        if (\strlen($nif) < 9) {
            throw new InvalidArgumentException('Too few chars');
        }
        if (preg_match('/\w$/', $nif)) {
            throw new InvalidArgumentException('Last char cannot');
        }
    }
}
