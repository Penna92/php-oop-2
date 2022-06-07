<?php
class Product
{
    protected $category;
    protected $type;
    // protected $nome;
    protected $marca;
    protected $animale;
    protected $price;

    function __construct($_category, $_type, $_marca, $_animale, $_price)
    {
        $this->category = $_category;
        $this->type = $_type;
        // $this->nome = $_nome;
        $this->marca = $_marca;
        $this->animale = $_animale;
        $this->price = $_price;
    }
    public function setCategory($_category)
    {
        $this->category = $_category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }
    public function getType()
    {
        return $this->type;
    }

    // public function setNome($_nome)
    // {
    //     $this->nome = $_nome;
    // }
    // public function getNome()
    // {
    //     return $this->nome;
    // }

    public function setMarca($_marca)
    {
        $this->marca = $_marca;
    }
    public function getMarca()
    {
        return $this->marca;
    }

    public function setAnimale($_animale)
    {
        $this->animale = $_animale;
    }
    public function getAnimale()
    {
        return $this->animale;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    // public function setSalePrice($_price)
    // {
    //     $this->salePrice = $_price - ($_price / 100 * $UserPremium->sconto);
    // }
    // public function getSalePrice()
    // {
    //     return $this->salePrice;
    // }
}
