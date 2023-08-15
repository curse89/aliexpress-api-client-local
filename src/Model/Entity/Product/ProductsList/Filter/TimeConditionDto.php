<?php

namespace Simla\Model\Entity\Product\ProductsList\Filter;
use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;

class TimeConditionDto
{
    /**
     * @var DateTimeInterface $begin_time
     *
     * @JMS\Type("DateTimeInterface<'Y-m-d\Th:m:s\Z'>")
     * @JMS\SerializedName("begin_time")
     */
    public $begin_time;

    /**
     * @var DateTimeInterface $end_time
     *
     * @JMS\Type("DateTimeInterface<'Y-m-d\Th:m:s\Z'>")
     * @JMS\SerializedName("end_time")
     */
    public $end_time;

    /**
     * @var string $time_type
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("time_type")
     */
    public $time_type;
}
