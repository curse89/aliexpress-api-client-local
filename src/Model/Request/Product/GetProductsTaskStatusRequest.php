<?php

declare(strict_types=1);

namespace Simla\Model\Request\Product;

use Simla\Model\Request\BaseRequest;
use Simla\Model\Response\Product\GetProductsTaskStatusResponse;

class GetProductsTaskStatusRequest extends BaseRequest
{
    /**
     * @var int $groupId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;

    public function getMethod(): string
    {
        return '/api/v1/tasks';
    }

    public function getExpectedResponse(): string
    {
        return GetProductsTaskStatusResponse::class;
    }

    public function getHTTPMethod(): string
    {
        return 'GET';
    }
}
