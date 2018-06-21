<?php

use Factory\FactoryMethods\Book10FactoryMethod;
use Factory\FactoryMethods\Book11FactoryMethod;
use Factory\FactoryInterfaces\FactoryMethodInterface;

writeln('START TESTING FACTORY METHOD PATTERN');
writeln('');

writeln('testing Book 10');
$factoryMethodInstance = new Book10FactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('testing Book 11');
$factoryMethodInstance = new Book11FactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('END TESTING FACTORY METHOD PATTERN');
writeln('');

/**
 * @param FactoryMethodInterface $factoryMethodInstance
 */
function testFactoryMethod($factoryMethodInstance)
{
    $object1 = $factoryMethodInstance->makeBook("Chemistry");
    writeln('Class name of instance: ' . get_class($object1));

    $object2 = $factoryMethodInstance->makeBook("Math");
    writeln('Class name of instance: ' . get_class($object2));

    $object3 = $factoryMethodInstance->makeBook("Physical");
    writeln('Class name of instance: ' . get_class($object3));

    $object4 = $factoryMethodInstance->makeBook();
    writeln('Class name of instance: ' . get_class($object4));
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}
?>