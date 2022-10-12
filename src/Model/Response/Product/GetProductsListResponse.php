<?php

declare(strict_types=1);

namespace Simla\Model\Response\Product;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\Product\ProductsList\ProductDto;
use Simla\Model\Response\BaseResponse;

class GetProductsListResponse extends BaseResponse
{
    /**
     * @var ProductDto[] $products
     *
     * @JMS\Type("array<Simla\Model\Entity\Product\ProductsList\ProductDto>")
     * @JMS\SerializedName("data")
     */
    public $products;
}
