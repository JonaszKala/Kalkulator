<?php
/*
 * Prosty Kalkulator
 * Funkcje:
 * add - dodawanie
 * substract - odejmowanie
 * multiply - mnożenie
 * divide - dzielenie
 * exponent - potęgowanie
 * square_root - pierwiastkowanie
 * getHistory - wyświetlenie historii operacji
 */
include 'Calculator.php';

$calc = new Calculator();
echo PHP_EOL;
var_dump ($calc->getHistory());