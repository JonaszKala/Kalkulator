<?php
/*
 * Simple Calculator
 * Functions:
 * add
 * substract
 * multiply
 * divide
 * exponent
 * square_root
 * getHistory
 */
include 'src/Calculator.php';
use JonaszKala\Kalkulator;

$calc = new Calculator();
echo PHP_EOL;
var_dump ($calc->getHistory());