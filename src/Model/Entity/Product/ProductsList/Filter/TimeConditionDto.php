<?php

namespace Simla\Model\Entity\Product\ProductsList\Filter;

class TimeConditionDto
{
    /**
     * @var string $begin_time
     *
     * @JMS\Type("DateTimeInterface<'YYYY-MM-DDThh:mm:ssZ'>")
     * @JMS\SerializedName("begin_time")
     */
    public $begin_time;

    /**
     * @var string $end_time
     *
     * @JMS\Type("DateTimeInterface<'YYYY-MM-DDThh:mm:ssZ'>")
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
