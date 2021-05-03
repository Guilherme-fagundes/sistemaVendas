<?php


namespace App\helpers;


use phpDocumentor\Reflection\Types\This;

class Calc
{
    private $data;
    private $fullTotal = 0.0;

    public function setdata($data)
    {
        $this->data = $data;

        foreach ($this->data as $total){
             $this->fullTotal += $total->preco;

        }
    }

    /**
     * @return float
     */
    public function getFullTotal(): float
    {
        return $this->fullTotal;
    }
}
