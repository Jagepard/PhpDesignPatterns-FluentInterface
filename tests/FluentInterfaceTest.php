<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface\Tests;

use Structural\FluentInterface\SomeClass;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class FluentInterfaceTest
 */
class FluentInterfaceTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var SomeClass
     */
    protected $class;

    protected function setUp(): void
    {
        $this->class = new SomeClass();
    }

    public function testAggregate()
    {
        $this->class->setFirstValue('123')->setSecondValue('456')->setThirdValue('789');
        $this->assertEquals('123456789', $this->class->aggregate());
    }
}
