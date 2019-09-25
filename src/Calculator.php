<?php
namespace JonaszKala\Kalkulator;
// Structure of a simple calculator class
class Calculator
{
    // Variables
    private $value;
    private $history;
    
    /* 
     * Serves constructing new object instances.
     * 
     * @param float $value
     * Starting value.
     * 
     * @return float
     */
    public function __construct(float $value)
    {
        $this->value=$value;
        $this->history[] = "Started with $value";
    }
    
    /*
     * Serves adding.
     * 
     * @param float $addend
     * Value to be added.
     * 
     * @return float
     */
    public function add(float $addend) : float
    {
        $this->value += $addend;
        $this->history[] = "Added $addend";
        return $this->value;
    }
    
    /*
     * Serves substracting.
     * 
     * @param float $substrahend
     * Value to be substracted.
     * 
     * @return float
     */
    public function substract(float $subtrahend) : float
    {
        $this->value -= $subtrahend;
        $this->history[] = "Substracted $subtrahend";
        return $this->value;
    }
    
    /*
     * Serves multiplying.
     * 
     * @param float $multiplier
     * Value to be multiplied with.
     * 
     * @return float
     */
    public function multiply(float $multiplier) : float
    {
        $this->value *= $multiplier;
        $this->history[] = "Multiplied by $multiplier";
        return $this->value;
    }
    
    /*
     * Serves dividing.
     * 
     * @param float $divider
     * Value to be divided by.
     * 
     * @return float
     */
    public function divide(float $divider) : float
    {
        $this->value /= $divider;
        $this->history[] = "Divided by $divider";
        return $this->value;
    }
    
    /*
     * Serves exponenting.
     * 
     * @param int $exp
     * Value used as an exponent.
     * 
     * @return float
     */
    public function exponent(int $exp)
    {
        $this->value = pow($this->value, $exp);
        $this->history[] = "Exponented with power of $exp";
        return $this->value;
    }
    
    /*
     * Serves square rooting.
     * 
     * @param float $value
     * Value will be square rooted.
     * 
     * @return float
     */
    public function square_root () : float
    {
        $this->value = sqrt($this->value);
        $this->history[] = "Square rooted";
        return $this->value;
    }
    
    //Serves viewing history of operations.
    public function getHistory()
    {
        return $this->history;
    }
}