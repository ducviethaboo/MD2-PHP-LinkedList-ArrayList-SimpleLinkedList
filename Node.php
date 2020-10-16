<?php


class Node
{
    public $date;
    public $link;
    public function __construct($date)
    {
        $this->date = $date;
        $this->link = null;
    }
}