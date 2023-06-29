<?php
Class Titulaire{
    private string $_nom;
    private string $_prenom;
    // Using DateTime to be able to get an age
    private DateTime $_birth;
    private $_age;
    private string $_ville;
    private array $_comptes;
// Just the usual functions, get, set and construct
    public function __construct(string $nom, string $prenom, string $birth, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = new DateTime($birth);
        $this->_age = $this->calcAge();
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
    public function getAge(){
        return $this->_age;
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
    // Functions to add several accounts to one user, using the same function as the one in exoLivre
    public function ajoutCompte(Compte $compte){
        $this->_comptes [] = $compte;
    }
    // Function using DateTime to get an age
    public function calcAge():string
    {
        $today = new DateTime();
        $age = $today->diff($this->_birth);
        return $age->y;
    }
    // Function to get all infos on a user, with the details of all accounts too
    public function getInfos(){
        $result = "";
        $result .= "<h1>$this->_prenom $this->_nom</h1>";
        $result .= "Date de naissance : ". $this->_birth->format('d m Y') ."<br>";
        $result .= "Age : $this->_age ans<br>";
        $result .= "Vit à $this->_ville <br>";
        foreach($this->_comptes as $compte){
            $result .= "$compte";
        }
        return $result;
    }
    // toString used to display the user's name with the account
    public function __toString(){
        $result = "$this->_prenom $this->_nom";
        return $result;
    }
}
?>