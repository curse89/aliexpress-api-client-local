<?php

namespace Simla\Model\Entity\Product\ProductsList\Filter;

class SearchContentDto
{
    /**
     * @var string $content_values
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
