<?php

namespace FirtsPackage;

class MyClass
{
    public static function isEqual(int $first, int $second): bool
    {
        return $first === $second;
    }

    public function sayHello(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
