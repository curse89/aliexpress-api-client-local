<?php

declare(strict_types=1);

/**
 * PHP version 7.3
 *
 * @category LimitApiException
 * @package  Simla\Component\Exception
 */
namespace Simla\Component\Exception;

use DateTimeImmutable;
use DateTimeZone;
use Simla\Client\Client;

/**
 * Class LimitApiException
 *
 * @category LimitApiException
 * @package  Simla\Component\Exception
 */
class LimitApiException extends LocalApiException
{
    /**
     * @var string $firstAliSkuCode
     */
    private $firstAliSkuCode;

    /**
     * @var DateTimeImmutable
     */
    private $nextPossibleRequestTime;

    public function setFirstAliSkuCode(string $skuCode): self
    {
        $this->firstAliSkuCode = $skuCode;

        return $this;
    }

    public function getFirstAliSkuCode(): ?string
    {
        return $this->firstAliSkuCode;
    }

    public function setNextPossibleRequestTime(): self
    {
        $this->nextPossibleRequestTime = new DateTimeImmutable(
            Client::UPDATE_PRODUCT_LIMIT_INTERVAL,
            new DateTimeZone('+0300')
        );

        return $this;
    }

    public function getNextPossibleRequestTime(): ?DateTimeImmutable
    {
        return $this->nextPossibleRequestTime;
    }
}
