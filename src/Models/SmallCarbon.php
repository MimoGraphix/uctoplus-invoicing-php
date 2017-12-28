<?php

namespace Uctoplus\API\Models;

/**
 * Class SmallCarbon
 * @package Uctoplus\API\Models
 */
class SmallCarbon extends ApiModel
{
    /**
     * @var integer
     */

    private $time = null;

    /**
     * SmallCarbon constructor.
     * @param int $time
     */
    public function __construct( $time = null )
    {
        if( $time instanceof SmallCarbon)
            $this->time = $time->time;
        elseif( $time == null )
            $this->time = time();
        elseif( is_int( $time ) )
            $this->time = $time;
        else
            $this->time = strtotime( $time );
    }

    /**
     * @param $days
     */
    public function addDays( $days )
    {
        $this->time += ( 24 * 60 * 60 * $days );

        return $this;
    }

    public function toArray()
    {
        return [
            "timestamp" => $this->time,
            "datetime" => date( "d.m.Y H:i", $this->time ),
        ];
    }


}