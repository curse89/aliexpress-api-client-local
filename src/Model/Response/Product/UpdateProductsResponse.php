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
     * @JMS\Type("array<Simla\Model\Response\Data\Product\UpdateProductsResponseResultData>")
     * @JMS\SerializedName("results")
     */
    public $results;

    public function isSuccessful(): bool
    {
        foreach($this->results as $result) {
            if (!$result->ok) {
                return false;
            }
        }

        return empty($this->results) ? false : true;
    }

    public function getAllErrors(): array
    {
        $errors = [];
        foreach ($this->results as $result) {
            if ($result->ok) {
                continue;
            }
            $errors[] = $result->errors;
        }

        return array_merge(...$errors);
    }
}
