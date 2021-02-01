<?php


namespace Posts;


interface Delivery
{
    public function recd();

    public function delivered();
}