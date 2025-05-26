<?php
interface Animal {
  public function makeSound();
}

class Zoo {
    public function hi() {
        echo "hi";
    }
}

class Cat extends Zoo implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();  // Output: Meow
$animal->hi();         // Output: hi
?>
