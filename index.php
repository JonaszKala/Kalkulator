<?php
/*
 * Prosty Kalkulator
 * Funkcje:
 * add - dodawanie
 * substract - odejmowanie
 * multiply - mno¿enie
 * divide - dzielenie
 * exponent - potêgowanie
 * square_root - pierwiastkowanie
 * getHistory - wyœwietlenie historii operacji
 */
include 'Calculator.php';

$calc = new Calculator();
echo PHP_EOL;
var_dump ($calc->getHistory());