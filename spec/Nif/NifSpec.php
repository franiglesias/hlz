<?php

namespace spec\Dojo\Nif;

use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class NifSpec extends ObjectBehavior
{
    public function it_should_not_have_more_than_max_chars()
    {
        $this->beConstructedWith('000000000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_should_not_have_less_than_min_chars()
    {
        $this->beConstructedWith('0000000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_should_not_end_with_a_number()
    {
        $this->beConstructedWith('000000000');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_should_not_start_with_a_letter_other_than_xyz()
    {
        $this->beConstructedWith('A0000000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_should_not_have_letters_in_the_middle()
    {
        $this->beConstructedWith('000Z0000T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    public function it_should_return_the_NIF_as_string()
    {
        $this->beConstructedWith('36101628T');
        $this->value()->shouldBe('36101628T');
    }
    //private const CONTROL_DIGITS = 'trwagmyfpdxbnjzsqvhlcke';
    //private const MAGIC_DIVISOR = 23;

    public function it_should_be_a_valid_NIF_if_modulus_is_zero()
    {
        $this->beConstructedWith('00000001T');
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

}
