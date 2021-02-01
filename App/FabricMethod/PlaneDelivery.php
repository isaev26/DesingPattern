<?php
/**
 * Author: ISOMAIN
 * Created: 30.01.2021
 * Product name: PhpStorm
 */


namespace Posts;


class PlaneDelivery implements Delivery
{

    private int $weight;
    private string $to;
    private string $from;
    private float $cost = 0;

    public function __construct(string $from, string $to, float $weight)
    {
        $this->from = $from;
        $this->to = $to;
        $this->weight = $weight;
        $this->cost = $weight * 12;
    }

    public function recd()
    {
        echo <<<ECHO
        {$this->from} - посылка принято. Сумма доставки {$this->cost}!  <br>
        Доставка на самолете!  <br>
        ECHO;
    }

    public function delivered()
    {
        echo "{$this->to} - доставлено!";
    }
}