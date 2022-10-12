<?php

declare(strict_types=1);

namespace Simla\Model\Response\Product;

use JMS\Serializer\Annotation as JMS;

class ResponseResultDto
{
    /**
     * @var string $ok
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ok")
     */
    public $ok;

    /**
     * @var string $ok
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("task_id")
     */
    public $taskId;

    /**
     * @var string $errors
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("errors")
     */
    public $errors;
}
