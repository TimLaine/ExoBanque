<?php
Class Compte{
    private string $_libel;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

// Just all the usual functions, get, set and construct
    public function __construct(string $libel, float $solde, string $devise, Titulaire $titulaire){
        $this->_libel = $libel;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->ajoutCompte($this);
    }
    public function getLibel(){
        return $this->_libel;
    }
    public function getSolde(){
        return $this->_solde;
    }
    public function getDevise(){
        return $this->_devise;
    }
    public function getTitulaire(){
        return $this->_titulaire;
    }
    public function setLibel($libel){
        $this->_libel = $libel;
    }
    public function setSolde($solde){
        $this->_solde = $solde;
    }
    public function setDevise($devise){
        $this->_devise = $devise;
    }
    public function setTitulaire($titulaire){
        $this->_titulaire = $titulaire;
    }
    // Two simple functions to take and put money on an account
    public function debit($somme){
        $this->_solde = $this->_solde - $somme;
    }
    public function credit($somme){
        $this->_solde = $this->_solde + $somme;
    }
    public function __toString(){
        $result = "<h3>Compte $this->_libel</h3>Solde sur le compte : $this->_solde $this->_devise <br>Titulaire du compte : $this->_titulaire";
        return $result;
    }
    //function using the previous ones to make a transfer between two accounts
    public function virement($compte2, $somme){
        $this->debit($somme);
        $compte2->credit($somme);
    }
}
?>