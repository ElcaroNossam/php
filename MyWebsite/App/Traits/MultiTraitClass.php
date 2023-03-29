<?php

namespace MyWebsite\App\Traits;

use MyWebsite\App\Traits\{MyTrait, AnotherTrait};

class MultiTraitClass
{
    use MyTrait, AnotherTrait {
        MyTrait::sayGoodbye insteadof AnotherTrait;
        AnotherTrait::sayHello as greet;
    }

    // Код класу
}
