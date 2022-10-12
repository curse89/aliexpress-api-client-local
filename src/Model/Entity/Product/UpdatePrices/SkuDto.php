<?php

declare(strict_types=1);

namespace Simla\Model\Entity\Product\UpdatePrices;

use JMS\Serializer\Annotation as JMS;

class SkuDto
{
    /**
     * @var string $skuCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_code")
     */
    public $skuCode;

    /**
     * @var string $price
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var string $discountPrice
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("discount_price")
     */
    public $discountPrice;
}
