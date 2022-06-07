<?php
class User
{
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $sconto;
    // protected $subscription;

    function __construct($_nome, $_cognome, $_email, $_indirizzo)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->indirizzo = $_indirizzo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }
    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }
    public function setEmail($_email)
    {
        if (!strpos($_email, '@')) {
            throw new Exception('Email non valida');
        } else {
            $this->email = $_email;
        }
    }
    public function setIndirizzo($_indirizzo)
    {
        $this->indirizzo = $_indirizzo;
    }

    public function setSconto($subscription)
    {
        if ($subscription == true) {
            $this->sconto = 20;
        } else {
            $this->sconto = 0;
        }
    }
    public function getSconto()
    {
        return $this->sconto;
    }
}
