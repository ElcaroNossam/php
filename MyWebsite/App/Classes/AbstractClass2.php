<?php

namespace MyWebsite\App\Classes;

abstract class AbstractClass2 {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function sayHello();
}
