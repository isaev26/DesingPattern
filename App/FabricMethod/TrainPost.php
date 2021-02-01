<?php
/**
 * Author: ISOMAIN
 * Created: 30.01.2021
 * Product name: PhpStorm
 */


namespace Posts;


class TrainPost extends EarthPost
{

    public function __construct(string $from, string $to, int $weight)
    {
        parent::__construct($from, $to, $weight);
    }

    public function getPostDelivery(): Delivery
    {
        return new TrainDelivery($this->from, $this->to, $this->weight);
    }
}