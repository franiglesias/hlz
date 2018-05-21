<?php

namespace spec\Dojo;

use Dojo\Example;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExampleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Example::class);
    }
}
