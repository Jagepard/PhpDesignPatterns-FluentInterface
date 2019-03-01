<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface;

/**
 * Class FluentInterface
 * @package Structural\FluentInterface
 */
final class FluentInterface
{
    /**
     * @var string
     */
    private $firstValue;
    /**
     * @var string
     */
    private $secondValue;
    /**
     * @var string
     */
    private $thirdValue;

    /**
     * @param $firstValue
     * @return $this
     */
    public function setFirstValue(string $firstValue): FluentInterface
    {
        $this->firstValue = $firstValue;
        return $this;
    }

    /**
     * @param $secondValue
     * @return $this
     */
    public function setSecondValue(string $secondValue): FluentInterface
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    /**
     * @param $thirdValue
     * @return $this
     */
    public function setThirdValue(string $thirdValue): FluentInterface
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
