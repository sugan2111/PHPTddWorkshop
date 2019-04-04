<?php

class Queue
{
    private $elements = [];
    private $size = 0;
    private $front = 0;

    public function isEmpty()
    {
        return $this->size == 0 ? true : false;
    }

    public function add(string $element)
    {
        $this->elements[$this->size++] = $element;
        return $this->size;
    }

    public function size()
    {
        return $this->size;
    }

    public function pop()
    {
        return $this->isEmpty() ? null : $this->elements[$this->front++];
    }
}