<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\FluentInterface;

final class FluentInterface
{
    private string $firstValue;
    private string $secondValue;
    private string $thirdValue;

    /**
     * Sets the first value
     * --------------------
     * Устанавливает первое значение
     *
     * @param  string          $firstValue
     * @return FluentInterface
     */
    public function setFirstValue(string $firstValue): FluentInterface
    {
        $this->firstValue = $firstValue;
        return $this;
    }

    /**
     * Sets the second value
     * ---------------------
     * Устанавливает второе значение
     *
     * @param  string          $secondValue
     * @return FluentInterface
     */
    public function setSecondValue(string $secondValue): FluentInterface
    {
        $this->secondValue = $secondValue;
        return $this;
    }

    /**
     * Sets the third value
     * --------------------
     * Устанавливает третье значение
     *
     * @param  string          $thirdValue
     * @return FluentInterface
     */
    public function setThirdValue(string $thirdValue): FluentInterface
    {
        $this->thirdValue = $thirdValue;
        return $this;
    }

    /**
     * Concatenates values
     * -------------------
     * Объединяет значения
     *
     * @return string
     */
    public function aggregate(): string
    {
        return $this->firstValue . $this->secondValue . $this->thirdValue;
    }
}
