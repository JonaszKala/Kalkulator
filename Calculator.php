<?php
// Struktura klasy prostego kalkulatora
class Calculator
{
    // Zmienne
    private $value;
    private $history;
    
    /* 
     * Konstruktor
     * Parametr - liczba rzeczywista
     */
    public function __construct(float $value)
    {
        $this->value=$value;
        $this->history[] = "Started with $value";
    }
    
    /*
     * Funkcja dodawania
     * Parametr - liczba rzeczywista
     */
    public function add(float $addend) : float
    {
        $this->value += $addend;
        $this->history[] = "Added $addend";
        return $this->value;
    
    }
    
    /*
     * Funkcja odejmowania
     * Parametr - liczba rzeczywista
     */
    public function substract(float $subtrahend) : float
    {
        $this->value -= $subtrahend;
        $this->history[] = "Substracted $subtrahend";
        return $this->value;
    }
    
    /*
     * Funkcja mno¿enia
     * Parametr - liczba rzeczywista
     */
    public function multiply(float $multiplier) : float
    {
        $this->value *= $multiplier;
        $this->history[] = "Multiplied by $multiplier";
        return $this->value;
    }
    
    /*
     * Funkcja dzielenia
     * Parametr - liczba rzeczywista
     */
    public function divide(float $divider) : float
    {
        $this->value /= $divider;
        $this->history[] = "Divided by $divider";
        return $this->value;
    }
    
    /*
     * Funkcja potêgowania
     * Parametr - liczba ca³kowita
     */
    public function exponent(int $exp)
    {
        $this->value = pow($this->value, $exp);
        $this->history[] = "Exponented with power of $exp";
        return $this->value;
    }
    
    /*
     * Funkcja pierwiastkowania
     * Parametr - dodatnia liczba rzeczywista
     */
    public function square_root () : float
    {
        $this->value = sqrt($this->value);
        $this->history[] = "Square rooted";
        return $this->value;
    }
    
    //Funkcja przywo³ania historii operacji arytmetycznych
    public function getHistory()
    {
        return $this->history;
    }
}