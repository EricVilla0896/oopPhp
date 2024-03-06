<?php

class Person {
    private $first = "Daniel";
    private $last = "Nielsen";
    private $age = "28";
    private $occupation = "Criminal";

    public function owner() {
        $a = $this->first ;
        $b = $this->last;
        return $a.$b;
    }


// class Pet {
    // public function owner() {
    //     $a = "Hi there!";
    //     return $a;
    // }
}