<?php

namespace Simla\Model\Entity\Product\ProductsList\Filter;
use JMS\Serializer\Annotation as JMS;

class SearchContentDto
{
    /**
     * @var array $content_values
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("content_values")
     */
    public $content_values;

    /**
     * @var string $content_type
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("content_type")
     */
    public $content_type;
}
