<?php

namespace MyWebsite\App\Classes;


class ChildClass1 extends ParentClass1 {
    public function sayHello() {
        parent::sayHello();
        echo " Hello from ChildClass!";
    }
}