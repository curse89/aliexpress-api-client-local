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
use Simla\Model\Response\ErrorResponseBody;
use Throwable;

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
     * @var DateTimeImmutable $createdAt
     */
    private $createdAt;

    public function __construct(ErrorResponseBody $responseBody, Throwable $previous = null)
    {
        parent::__construct($responseBody, $previous);

        $this->createdAt = new DateTimeImmutable("now", new DateTimeZone('UTC'));;
    }

    public function setFirstAliSkuCode(string $skuCode): self
    {
        $this->firstAliSkuCode = $skuCode;

        return $this;
    }

    public function getFirstAliSkuCode(): ?string
    {
        return $this->firstAliSkuCode;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
