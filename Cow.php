<?php

class Cow extends Animal
{
    public function __construct()
    {
        $this->id = uniqid();
        $this->type = __CLASS__;
    }
}
