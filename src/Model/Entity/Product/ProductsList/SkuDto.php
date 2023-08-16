<?php

declare(strict_types=1);

namespace Simla\Model\Entity\Product\ProductsList;

use JMS\Serializer\Annotation as JMS;

class SkuDto
{
    /**
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;
    /**
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
