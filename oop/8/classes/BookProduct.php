<?php

class BookProduct extends Product
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }


    public function getCpu()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
       $out = parent::getProduct();
       $out .= "Кол-во страниц: {$this->numPages} <br>";
       return $out;
    }
}