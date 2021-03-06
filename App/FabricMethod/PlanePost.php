<?php
/**
 * Author: ISOMAIN
 * Created: 30.01.2021
 * Product name: PhpStorm
 */


namespace Posts;


class PlanePost extends AirPost
{

    public function __construct(string $from, string $to, int $weight)
    {
        parent::__construct($from, $to, $weight);
    }

    public function getPostDelivery(): Delivery
    {
        return new PlaneDelivery($this->from, $this->to, $this->weight);
    }
}