<?php

class Animal {
    public $age;
    public $category;
    public $name;

    public function __construct($age, $category, $name) {
        $this->age = $age;
        $this->category = $category;
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getName() {
        return $this->name;
    }

    public function __destruct() {
        return;
    }
}