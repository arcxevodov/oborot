<?php
require_once "Tree.php";
class PearTree extends Tree {
    public function __construct()
    {
        $this->total = mt_rand(0, 20);
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
        return "Pear";
    }
}