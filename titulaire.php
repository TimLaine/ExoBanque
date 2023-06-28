<?php
Class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_birth;
    private string $_ville;
    private array $_comptes;

    public function __construct(string $nom, string $prenom, string $birth, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = $birth;
        $this->_ville = $ville;
        $this->_comptes = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getBirth(){
        return $this->_birth;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getComptes(){
        return $this->_comptes;
    }
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setBirth($birth){
        $this->_birth = $birth;
    }
    public function setVille($ville){
        $this->_ville = $ville;
    }
    public function setComptes($ville){
        $this->_comptes = $ville;
    }
    public function ajoutCompte(Compte $compte){
        $this->_comptes [] = $compte;
    }
    public function getInfos(){
        $result = "";
        $result .= "<h1>$this->_prenom $this->_nom</h1>";
        $result .= "Date de naissance : $this->_birth <br>";
        $result .= "Vit à $this->_ville <br>";
        foreach($this->_comptes as $compte){
            $result .= "$compte";
        }
        return $result;
    }
    public function __toString(){
        $result = "$this->_prenom $this->_nom";
        return $result;
    }
}
?>