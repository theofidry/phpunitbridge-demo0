<?php declare(strict_types=1);

class FooTest extends \PHPUnit\Framework\TestCase
{
    public function testFoo0()
    {
        (new Foo())();
    }

    /**
     * @group legacy
     */
    public function testFoo1()
    {
        (new Foo())();
    }

    /**
     * @group legacy
     * @expectedDeprecation Hello
     */
    public function testFoo2()
    {
        (new Foo())();
    }

    /**
     * @group legacy
     * @expectedDeprecation olleH
     */
    public function testFoo3()
    {
        (new Foo())();
    }
}
