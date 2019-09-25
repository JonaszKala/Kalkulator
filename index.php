<?php
/*
 * Simple Calculator
 * Functions:
 * add
 * substract
 * multiply
 * divide
 * exponent
 * squareRoot
 * getHistory
 */
include 'src/Calculator.php';
use JonaszKala\Kalkulator\Calculator;

$calc = new Calculator(0);
echo PHP_EOL;
var_dump ($calc->getHistory());