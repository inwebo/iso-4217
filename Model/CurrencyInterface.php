<?php

namespace Inwebo\Currency\Model;


/**
 * Class Currency
 *
 * @see https://en.wikipedia.org/wiki/ISO_4217
 * @see https://www.iso.org/fr/iso-4217-currency-codes.html
 */
interface CurrencyInterface
{
    /**
     * 3 chars long uppercase
     *
     * @return string
     */
    public function getAlpha3(): string;

    /**
     * 3 chars long
     *
     * @return string
     */
    public function getNumeric(): string;

    /**
     * @return int
     */
    public function getMinorUnit(): int;

    /**
     * @return string
     */
    public function getName(): string;
}