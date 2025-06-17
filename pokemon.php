<?php include ('function.php'); ?>

<?php
class Pokemon {
    private $nom;
    private $pa;
    private $type;
    private $pv;

    //Construct
    function __construct(
        $nom,
        $pa,
        $type,
        $pv
    ) {
        $this->setNom($nom);
        $this->setPa($pa);
        $this->setType($type);
        $this->setPv($pv);
    }

    //GETTER & SETTER
    //NOM
    public function getNom(){
        return $this->name;
    }

    public function setNom() {
        $this->nom = $nom;
    }

    //PA
    public function getPa(){
        return $this->pa;
    }

    public function setPa() {
        $this->pa = $pa;
    }

    //TYPE
    public function getType(){
        return $this->type;
    }

    public function setType() {
        $this->type = $type;
    }

    //PV

    public function getPv(){
        return $this->pv;
    }

    public function setPv() {
        $this->pv = $pv;
    }
}

//FONCTION POKEDEX
    public function pokedex()
    {
        //ON DEFINI UNE VARIABLE A 10% DU RESERVOIR
        $alertEssence = $this->getReservoir() * 0.1;

        echo        $this->getCompteur() . 'km<br>
        Phare : ' . $this->getPhare() . '<br>
        Ess  : ' . $this->getEssence() . '/' . $this->getReservoir() . '<br>';
        //SOUS LES 10% ON MET LE SIGNAL ROUGE
        if ($this->getEssence() <= $alertEssence) {
            echo 'Signal Essence : rouge ';
        } else {
            echo 'Signal Essence : Vert';
        }
    }

    public function faireLePlein()
    {
        $this->setEssence($this->getReservoir());
    }