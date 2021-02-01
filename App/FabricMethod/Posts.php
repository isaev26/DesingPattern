<?php
/**
 * Author: ISOMAIN
 * Created: 28.01.2021
 * Product name: PhpStorm
 */

namespace Posts;

abstract class Posts
{
    abstract public function getPostDelivery(): Delivery;

    public function dispatch ($content): void
    {
        $work = $this->getPostDelivery();
        $work->recd();
        $work->delivered();
    }
}


