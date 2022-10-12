<?php

declare(strict_types=1);

namespace Simla\Model\Response\Product;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\ResponseInterface;

class UpdateProductsResponse implements ResponseInterface
{
    /**
     * @var string $groupId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;

    /**
     * @var array $results
     *
     * @JMS\Type("array<Simla\Model\Response\Product\ResponseResultDto>")
     * @JMS\SerializedName("results")
     */
    public $results;
}
