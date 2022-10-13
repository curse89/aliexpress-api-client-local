<?php

declare(strict_types=1);

namespace Simla\Model\Enum;

class ProductsTaskActions
{
    public const STOCKS = 3;
    public const PRICES = 4;

    public const ACTIONS_LIST = [
        self::STOCKS,
        self::PRICES,
    ];

    public const ACTIONS_NAMES = [
        self::STOCKS => 'update stocks',
        self::PRICES => 'update prices',
    ];
}
