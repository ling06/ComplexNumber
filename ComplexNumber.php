<?php
class ComplexNumber
{
    
    public float $r;
    public float $i;
    
    public function __construct(float $r = 0, float $i = 0)
    {
        $this->r = $r;
        $this->i = $i;
    }
    
    public function add(ComplexNumber|float $r, float $i = 0): ComplexNumber
    {
        if ($r instanceOf ComplexNumber) {
            $i = $r->i;
            $r = $r->r;
        }
        $this->r += $r;
        $this->i += $i;
        return $this;
    }
    
    public function substract(ComplexNumber|float $r, float $i = 0): ComplexNumber
    {
        if ($r instanceOf ComplexNumber) {
            $i = $r->i;
            $r = $r->r;
        }
        $this->r -= $r;
        $this->i -= $i;
        return $this;
    }
    
    public function multiply(ComplexNumber|float $r, float $i = 0): ComplexNumber
    {
        if ($r instanceOf ComplexNumber) {
            $i = $r->i;
            $r = $r->r;
        }
        $endR = $this->r * $r - $this->i * $i;
        $endI = $this->i * $r + $this->r * $i;
        $this->r = $endR;
        $this->i = $endI;
        return $this;
    }
    
    public function divide(ComplexNumber|float $r, float $i = 0): ComplexNumber
    {    
        if ($r instanceOf ComplexNumber) {
            $i = $r->i;
            $r = $r->r;
        }
        if (!$i && !$r) {
            throw new Exception('Division by zero');
        }    
        $endR = ($this->r * $r + $this->i * $i) / ($r * $r + $i * $i);
        $endI = ($this->i * $r - $this->r * $i) / ($r * $r + $i * $i);
        $this->r = $endR;
        $this->i = $endI;
        return $this;
    }
    
    function __toString()
    {
        if (!$this->r && !$this->i) {
            return '0';
        }
        $str = '';
        if ($this->r) {
            $str .= $this->r;
        }
        if ($this->i) {
            $str .= ($this->i > 0 ? '+' : '') . $this->i . 'i';
        }
        return $str;
    }
    
}
