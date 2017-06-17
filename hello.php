<?php

class World {

    protected $msg = "Hello";

    public function sayHello ()
    {
        return $this->msg;
    }
}
echo (new World)->sayHello() . PHP_EOL;
