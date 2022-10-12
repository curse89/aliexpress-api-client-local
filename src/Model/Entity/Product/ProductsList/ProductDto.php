<?php

declare(strict_types=1);

namespace Simla\Model\Entity\Product\ProductsList;

use JMS\Serializer\Annotation as JMS;

class ProductDto
{
    /**
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var SkuDto[] $sku
     *
     * @JMS\Type("array<Simla\Model\Entity\Product\ProductsList\SkuDto>")
     * @JMS\SerializedName("sku")
     */
    public $sku;
}
