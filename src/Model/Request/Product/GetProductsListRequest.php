<?php

declare(strict_types=1);

namespace Simla\Model\Request\Product;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Request\BaseRequest;
use Simla\Model\Response\Product\GetProductsListResponse;
use Symfony\Component\Validator\Constraints as Assert;

class GetProductsListRequest extends BaseRequest
{
    public const PRODUCTS_LIMIT = 50;

    /**
     * @var ?string $lastProductId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("last_product_id")
     */
    public $lastProductId;

    /**
     * @var string $limit
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("limit")
     * @Assert\NotNull()
     */
    public $limit = self::PRODUCTS_LIMIT;

    public function getMethod(): string
    {
        return '/api/v1/scroll-short-product-by-filter';
    }

    public function getExpectedResponse(): string
    {
        return GetProductsListResponse::class;
    }

    public function getHTTPMethod(): string
    {
        return 'POST';
    }
}
