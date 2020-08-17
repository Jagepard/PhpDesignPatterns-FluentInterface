<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface;

final class FluentInterface
{
    private string $firstValue;
    private string $secondValue;
    private string $thirdValue;

    public function setFirstValue(string $firstValue): FluentInterface
    {
        $this->firstValue = $firstValue;
        return $this;
    }

    public function setSecondValue(string $secondValue): FluentInterface
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    public function setThirdValue(string $thirdValue): FluentInterface
    {
        $this->thirdValue = $thirdValue;
        return $this;
    }

    public function aggregate(): string
    {
        return $this->firstValue . $this->secondValue . $this->thirdValue;
    }
}
