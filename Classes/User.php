<?php
class User
{
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $sconto = 0;
    // protected $subscription;
    protected $carta_credito;
    protected $prodotto_acquistato;

    function __construct($_nome, $_cognome, $_email, $_indirizzo, $_carta_credito = [], $_prodotto_acquistato = []) //aggiungere carta credito
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->indirizzo = $_indirizzo;
        $this->carta_credito = $_carta_credito;
        $this->prodotto_acquistato = $_prodotto_acquistato;
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

    public function getCartaCredito()
    {
        return $this->carta_credito;
    }
    public function setCartaCredito($_carta_credito)
    {
        $this->carta_credito[] = $_carta_credito;
    }
    public function getProdottoAcquistato()
    {
        return $this->prodotto_acquistato;
    }
    public function setProdottoAcquistato($_prodotto_acquistato)
    {
        $this->prodotto_acquistato[] = $_prodotto_acquistato;
    }
}
