<?php
/*
 * Prosty Kalkulator
 * Funkcje:
 * add - dodawanie
 * substract - odejmowanie
 * multiply - mno�enie
 * divide - dzielenie
 * exponent - pot�gowanie
 * square_root - pierwiastkowanie
 * getHistory - wy�wietlenie historii operacji
 */
include 'Calculator.php';

$calc = new Calculator();
echo PHP_EOL;
var_dump ($calc->getHistory());