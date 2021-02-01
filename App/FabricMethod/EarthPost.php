<?php
/**
 * Author: ISOMAIN
 * Created: 30.01.2021
 * Product name: PhpStorm
 */


namespace Posts;


abstract class EarthPost extends Posts
{

    protected int $weight;
    protected string $to;
    protected string $from;

    /**
     * @param $from
     * @param $to
     * @param $weight
     */
    public function __construct(string $from, string $to, int $weight)
    {
        $this->from = $from;
        $this->to = $to;
        $this->weight = $weight;
    }

    abstract public function getPostDelivery(): Delivery;
}