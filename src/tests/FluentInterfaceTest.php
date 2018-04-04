<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\FluentInterface\SomeClass;

/**
 * Class FluentInterfaceTest
 */
class FluentInterfaceTest extends PHPUnit_Framework_TestCase
{

    protected $class;

    protected function setUp(): void
    {
        $this->class = new SomeClass();
    }

    public function testAggregate()
    {
        $this->getClass()->setFirstValue('123')->setSecondValue('456')->setThirdValue('789');
        $this->assertEquals('123456789', $this->getClass()->aggregate());
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }
}
