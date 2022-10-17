<?php

declare(strict_types=1);

namespace Simla\Model\Response\Product;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\BaseResponse;
use Simla\Model\Response\Data\Product\GetProductsTaskStatusResponseData;

class GetProductsTaskStatusResponse extends BaseResponse
{
    /**
     * @var GetProductsTaskStatusResponseData[] $taskStatuses
     *
     * @JMS\Type("array<Simla\Model\Response\Data\Product\GetProductsTaskStatusResponseData>")
     * @JMS\SerializedName("data")
     */
    public $taskStatuses;
}
