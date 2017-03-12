<?php
declare(strict_types = 1);

class Foo
{
    public function __invoke()
    {
        @trigger_error('Hello', E_USER_DEPRECATED);
    }
}