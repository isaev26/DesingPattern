<?php
/**
 * Author: ISOMAIN
 * Created: 30.01.2021
 * Product name: PhpStorm
 */


namespace Posts;


class TruckDelivery implements Delivery
{

    private int $weight;
    private string $to;
    private string $from;
    private int $cost = 0;

    public function __construct(string $from, string $to, int $weight)
    {
        $this->from = $from;
        $this->to = $to;
        $this->weight = $weight;
        $this->cost = $weight * 7;
    }

    public function recd()
    {
        echo <<<_ECHO
        {$this->from} - посылка принято. Сумма доставки {$this->cost}! <br>
        Доставка на грузовике! <br>
        _ECHO;
    }

    public function delivered()
    {
        echo "{$this->to} - доставлено! <br>";
    }
}