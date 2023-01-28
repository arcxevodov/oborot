<?php

abstract class Tree {
    public int $total;

    abstract function __construct();

    abstract function totalWeight(): int;

    abstract function __toString(): string;
}