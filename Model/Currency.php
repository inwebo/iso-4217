<?php

namespace Inwebo\Currency\Model;

/**
 * Class Currency
 *
 * {@inheritDoc}
 */
class Currency implements CurrencyInterface
{
    /** @var int Current last revision */
    const VERSION = 2015;

    /** @var string length = 3, uppercase*/
    protected $alpha3;
    /** @var string 3 length = 3 IS a string*/
    protected $numeric;
    /** @var int */
    protected $minorUnit;
    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    /**
     * @param string $alpha3
     */
    protected function setAlpha3(string $alpha3): void
    {
        $this->alpha3 = $alpha3;
    }

    /**
     * @return string
     */
    public function getNumeric(): string
    {
        return $this->numeric;
    }

    /**
     * @param string $numeric
     */
    protected function setNumeric(string $numeric): void
    {
        $this->numeric = $numeric;
    }

    /**
     * @return int
     */
    public function getMinorUnit(): int
    {
        return $this->minorUnit;
    }

    /**
     * @param int $minorUnit
     */
    protected function setMinorUnit(int $minorUnit): void
    {
        $this->minorUnit = $minorUnit;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Currency constructor.
     *
     * @param string $alpha3
     * @param string $numeric iso 36611 country numeric code, must be a string eg: "092"
     * @param int    $minorUnit
     * @param string $name
     */
    public function __construct(string $alpha3, string $numeric, int $minorUnit, string $name)
    {
        $this->alpha3    = $alpha3;
        $this->numeric   = $numeric;
        $this->minorUnit = $minorUnit;
        $this->name      = $name;
    }
}