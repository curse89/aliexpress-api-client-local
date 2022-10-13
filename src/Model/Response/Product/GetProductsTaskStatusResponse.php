<?php

declare(strict_types=1);

namespace Simla\Model\Response\Product;

use Simla\Model\Response\Data\Product\GetProductsTaskStatusResponseData;
use Simla\Model\Response\ResponseInterface;

class GetProductsTaskStatusResponse implements ResponseInterface
{
    /**
     * @var GetProductsTaskStatusResponseData[] $taskStatuses
     *
     * @JMS\Type("array<Simla\Model\Response\Data\Product\GetProductsTaskStatusResponseData>")
     * @JMS\SerializedName("data")
     */
    public $taskStatuses;
}
