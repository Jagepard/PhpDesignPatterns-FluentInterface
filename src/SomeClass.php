<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface;

/**
 * Class SomeClass
 * @package Structural\FluentInterface
 */
class SomeClass
{

    /**
     * @var string
     */
    protected $firstValue;
    /**
     * @var string
     */
    protected $secondValue;
    /**
     * @var string
     */
    protected $thirdValue;

    /**
     * @param $firstValue
     * @return $this
     */
    public function setFirstValue(string $firstValue): SomeClass
    {
        $this->firstValue = $firstValue;
        return $this;
    }

    /**
     * @param $secondValue
     * @return $this
     */
    public function setSecondValue(string $secondValue): SomeClass
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    /**
     * @param $thirdValue
     * @return $this
     */
    public function setThirdValue(string $thirdValue): SomeClass
    {
        $this->thirdValue = $thirdValue;
        return $this;
    }

    /**
     * @return string
     */
    public function aggregate(): string
    {
        return $this->firstValue . $this->secondValue . $this->thirdValue;
    }
}
