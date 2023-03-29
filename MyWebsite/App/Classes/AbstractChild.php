<?php

namespace MyWebsite\App\Classes;

class AbstractChild extends AbstractClass2 {
    public function sayHello() {
        echo "Hello from {$this->name}!";
    }
}