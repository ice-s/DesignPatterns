<?php

use Factory\FactoryProducer\FactoryProducer;

writeln('START TESTING Abstract FACTORY PATTERN');
writeln('');
testAbstractFactory();
writeln('');

/**
 * @param FactoryProducer $instance
 */
function testAbstractFactory()
{
    $bookFactory = FactoryProducer::getFactory('Book');

    $object1 = $bookFactory->makeBook("Chemistry");
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $bookFactory->makeBook("Math");
    writeln('Class name of instance: ' . get_class($object2));

    $object3 = $bookFactory->makeBook("Physical");
    writeln('Class name of instance: ' . get_class($object3));

    $object4 = $bookFactory->makeBook();
    writeln('Class name of instance: ' . get_class($object4));

    writeln('');
    writeln('********************************');
    writeln('');

    $vehicleFactory = FactoryProducer::getFactory('Vehicle');

    $object1 = $vehicleFactory->makeVehicle("Motor");
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $vehicleFactory->makeVehicle("Oto");
    writeln('Class name of instance: ' . get_class($object2));
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
?>