<?php
class CartaCredito
{
    private $nome;
    private $numero;
    private $cvv;
    private $dataScadenza;

    function __construct($_nome, $_numero, $_cvv, $_dataScadenza = "")
    {
        $this->nome = $_nome;
        $this->numero = $_numero;
        $this->cvv = $_cvv;
        $this->dataScadenza = $_dataScadenza;
    }
    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNumero($_numero)
    {
        $this->numero = $_numero;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setCvv($_cvv)
    {
        $this->cvv = $_cvv;
    }
    public function getCvv()
    {
        return $this->cvv;
    }
    public function setDataScadenza($_dataScadenza)
    {
        if ($_dataScadenza < date("Y-m-d")) {
            //     throw new Exception('Carta di credito scaduta');
            $this->dataScadenza = $_dataScadenza . ' (Carta di credito scaduta, non puoi effettuare l\'acquisto) ';
        } else {
            $this->dataScadenza = $_dataScadenza;
        }
    }
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }
}
