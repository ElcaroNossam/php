<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use MyWebsite\App\Classes\MyClass;
use MyWebsite\App\Classes\{ParentClass1, ParentClass2, ChildClass1, ChildClass2, AbstractChild, AbstractClass2};
use MyWebsite\App\Interfaces\{MyInterface, MyImplementation};
use MyWebsite\App\Traits\{MyTrait,  MultiTraitClass, TraitUser, AnotherTrait};



$parent1 = new ParentClass1();
$parent2 = new ParentClass2();
$child1 = new ChildClass1();
$child2 = new ChildClass2();
$abstract1 = new AbstractChild('Jon');
$implementation = new MyImplementation();
$traitUser = new TraitUser();
$multiTrait = new MultiTraitClass();
$myClass = new MyClass();
echo $myClass::MY_CONST;
echo $abstract1->sayHello();
?>