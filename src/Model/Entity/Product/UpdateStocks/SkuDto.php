<?php

declare(strict_types=1);

namespace Simla\Model\Entity\Product\UpdateStocks;

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
     * @var string $inventory
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("inventory")
     */
    public $inventory;
}
