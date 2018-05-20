<?php

namespace spec\Dojo\Nif;

use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class NifSpec extends ObjectBehavior
{
    public function it_can_not_have_more_than_max_chars()
    {
        $this->beConstructedWith('000000000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_can_not_have_less_than_min_chars()
    {
        $this->beConstructedWith('0000000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_can_not_end_with_a_number()
    {
        $this->beConstructedWith('000000000');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }
}
