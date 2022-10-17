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
     * @var string $firstAliProductId
     */
    private $firstAliProductId;

    /**
     * @var DateTimeImmutable
     */
    private $nextPossibleRequestTime;

    public function setFirstAliProductId(string $productId): self
    {
        $this->firstAliProductId = $productId;

        return $this;
    }

    public function getFirstAliProductId(): ?string
    {
        return $this->firstAliProductId;
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
