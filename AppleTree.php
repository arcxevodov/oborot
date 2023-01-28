<?php
require_once "Tree.php";
class AppleTree extends Tree {
    public function __construct()
    {
        $this->total = mt_rand(40, 50);
    }

    public function totalWeight(): int
    {
        $weights = [];
        for ($i = 0; $i < $this->total; $i++) {
            $weights[$i] = mt_rand(130, 170);
        }
        return array_sum($weights);
    }

    public function __toString(): string
    {
        return "Apple";
    }
}