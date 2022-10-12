<?php

declare(strict_types=1);

namespace Simla\Model\Request\Product;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\Product\UpdateStocks\ProductDto;
use Simla\Model\Request\BaseRequest;
use Simla\Model\Response\Product\UpdateProductsResponse;

class UpdateProductsStocksRequest extends BaseRequest
{
    /**
     * @var ProductDto[] $products
     *
     * @JMS\Type("array<Simla\Model\Entity\Product\UpdateStocks\ProductDto>")
     * @JMS\SerializedName("products")
     */
    public $products;

    public function getMethod(): string
    {
        return '/api/v1/product/update-sku-stock';
    }

    public function getExpectedResponse(): string
    {
        return UpdateProductsResponse::class;
    }
}
