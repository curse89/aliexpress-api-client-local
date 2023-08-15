<?php

namespace Simla\Model\Entity\Product\ProductsList;

use Simla\Model\Entity\Product\ProductsList\Filter\SearchContentDto;
use Simla\Model\Entity\Product\ProductsList\Filter\TimeConditionDto;
use JMS\Serializer\Annotation as JMS;

class FetchFilterDto
{
    /**
     * @var array $top_category_ids
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("top_category_ids")
     */
    public $top_category_ids;

    /**
     * @var array $leaf_category_ids
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("leaf_category_ids")
     */
    public $leaf_category_ids;

    /**
     * @var string $owner_id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("owner_id")
     */
    public $owner_id;

    /**
     * @var array $shipping_template_ids
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("shipping_template_ids")
     */
    public $shipping_template_ids;

    /**
     * @var string $status
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var array $group_ids
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("group_ids")
     */
    public $group_ids;

    /**
     * @var bool $has_quantity
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("has_quantity")
     */
    public $has_quantity;

    /**
     * @var SearchContentDto $search_content
     *
     * @JMS\Type("Simla\Model\Entity\Product\ProductsList\Filter\SearchContentDto")
     * @JMS\SerializedName("search_content")
     */
    public $search_content;

    /**
     * @var TimeConditionDto $time_range_condition
     *
     * @JMS\Type("Simla\Model\Entity\Product\ProductsList\Filter\TimeConditionDto")
     * @JMS\SerializedName("time_range_condition")
     */
    public $time_range_condition;

    /**
     * @var string $offline_reason
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("offline_reason")
     */
    public $offline_reason;
}
