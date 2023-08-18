<?php
// Base class for animals
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic animal sound";
    }

    public function getName() {
        return $this->name;
    }
}

// Subclass for Cats
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

// Subclass for Dogs
class Dog extends Animal {
    public function makeSound() {
        return "Woof";
    }
}

// Subclass for Ducks
class Duck extends Animal {
    public function makeSound() {
        return "Quack";
    }
}

// Usage
$animals = [
    new Cat("Fluffy"),
    new Dog("Buddy"),
    new Duck("Daffy")
];

foreach ($animals as $animal) {
    echo $animal->getName() . ": " . $animal->makeSound() . '<br/>';
}
