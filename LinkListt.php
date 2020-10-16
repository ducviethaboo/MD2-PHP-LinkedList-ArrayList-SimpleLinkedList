<?php


class LinkList
{
    public $firstnode;
    public $lastnode;
    public $count;

    public function __construct()
    {
        $this->firstnode = null;
        $this->lastnode = null;
        $this->count = 0;
    }

    public function insertFisrt($date)
    {
        $link = new Node($date);
        $link->next = $this->firstnode;
        $this->firstnode = $link;

        if ($this->firstnode == null) {
            $this->lastnode = $link;
        }
        $this->count++;
    }

    public function insertLast($date)
    {
        if ($this->firstnode !== null) {
            $link = new Node($date);
            $this->lastnode->next = $link;
            $link->next = null;
            $this->lastnode = $link;
            $this->count++;
        } else {
            $this->insertFisrt($date);
        }
    }

    public function totalNode()
    {
        return $this->count;
    }
}