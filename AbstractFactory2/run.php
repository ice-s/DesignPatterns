<?php

use Factory\Factories\TypeAFactory;
use Factory\Factories\TypeBFactory;
use Factory\Factories\TypeCFactory;

writeln('START TESTING Abstract FACTORY PATTERN');
writeln('');
$typeA = new TypeAFactory();
$typeB = new TypeBFactory();
$typeC = new TypeCFactory();

testAbstractFactory($typeA);
testAbstractFactory($typeB);
testAbstractFactory($typeC);
writeln('');

/**
 * @param \Factory\Abstracts\AbstractFactory $factory
 */
function testAbstractFactory($factory)
{

    $object1 = $factory->makeDoor();
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $factory->makeHood();
    writeln('Class name of instance: ' . get_class($object2));

    $object3 = $factory->makeWheel();
    writeln('Class name of instance: ' . get_class($object3));

    writeln('');
    writeln('********************************');
    writeln('');

}

function testAbstractFactory2(){
    writeln('');
    writeln('********************************');
    writeln('');

    $typeAFactory = FactoryProducer::getFactory('TypeA');

    $object1 = $typeAFactory->makeBook();
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $typeAFactory->makeVehicle();
    writeln('Class name of instance: ' . get_class($object2));

    writeln('');
    writeln('********************************');
    writeln('');

    $typeBFactory = FactoryProducer::getFactory('TypeB');

    $object1 = $typeBFactory->makeBook();
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $typeBFactory->makeVehicle();
    writeln('Class name of instance: ' . get_class($object2));
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
?>