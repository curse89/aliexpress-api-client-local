<?php

declare(strict_types=1);

namespace Simla\Model\Entity\Product\UpdatePrices;

use JMS\Serializer\Annotation as JMS;

class ProductDto
{
    /**
     * @var string $productId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("product_id")
     */
    public $productId;

    /**
     * @var SkuDto[] $skus
     *
     * @JMS\Type("array<Simla\Model\Entity\Product\UpdatePrices\SkuDto>")
     * @JMS\SerializedName("skus")
     */
    public $skus;
}
