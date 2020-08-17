<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface\Tests;

use Structural\FluentInterface\FluentInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FluentInterfaceTest extends PHPUnit_Framework_TestCase
{
    private FluentInterface $object;

    protected function setUp(): void
    {
        $this->object = new FluentInterface();
    }

    public function testAggregate()
    {
        $this->object->setFirstValue('123')->setSecondValue('456')->setThirdValue('789');
        $this->assertEquals('123456789', $this->object->aggregate());
    }
}
