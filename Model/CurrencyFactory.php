<?php

namespace Inwebo\Currency\Model\Model;

use Inwebo\Currency\Model\Currency;
use Inwebo\Currency\Model\CurrencyException;

class CurrencyFactory
{
    /**
     * @param string $alpha3
     * @param string $numeric
     * @param string $minorUnit
     * @param string $name
     *
     * @return Currency
     *
     * @throws CurrencyException
     */
    public static function construct(string $alpha3, string $numeric, string $minorUnit, string $name): Currency
    {
        if(strlen($alpha3) !== 3) {
            throw new CurrencyException(sprintf('$alpha3 param string lenght !== 3, your input %s', $alpha3));
        } else {
            $alpha3 = strtoupper($alpha3);
        }

        if(strlen($numeric) !== 3) {
            throw new CurrencyException(sprintf('$numeric param string lenght !== 3, your input %s', $alpha3));
        }

        return new Currency($alpha3, $numeric, $minorUnit, $name);
    }
}