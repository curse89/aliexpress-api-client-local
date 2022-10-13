<?php

declare(strict_types=1);

namespace Simla\Model\Enum;

class ProductsTaskStatuses
{
    public const CREATED = 1;
    public const PROCESSING = 2;
    public const SUCCESSFUL = 3;
    public const FAILED = 4;

    public const STATUSES_LIST = [
        self::CREATED,
        self::PROCESSING,
        self::SUCCESSFUL,
        self::FAILED,
    ];

    public const STATUSES_NAMES = [
        self::CREATED => 'created',
        self::PROCESSING => 'processing',
        self::SUCCESSFUL => 'successful',
        self::FAILED => 'failed',
    ];
}
