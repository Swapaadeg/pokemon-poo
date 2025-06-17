<?php include ('function.php'); ?>

<?php
class Pokemon {
    private $nom;
    private $pa;
    private $type;
    private $pv;
    private $pvRestant;

    //Construct
    function __construct(
        $nom,
        $pa,
        $type,
        $pv,
        $pvRestant
    ) {
        $this->setNom($nom);
        $this->setPa($pa);
        $this->setType($type);
        $this->setPv($pv);
        $this->setPvrestant($pvRestant);
    }

    //GETTER & SETTER
    //NOM
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    //PA
    public function getPa(){
        return $this->pa;
    }

    public function setPa($pa) {
        $this->pa = $pa;
    }

    //TYPE
    public function getType(){
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    //PV

    public function getPv(){
        return $this->pv;
    }

    public function setPv($pv) {
        $this->pv = $pv;
    }


    //PV RESTANT
    public function getPvRestant(){
        return $this->pvRestant;
    }

    public function setPvRestant($pvRestant) {
        $this->pvRestant = $pvRestant;
    }
    //FONCTION POKEDEX
    public function pokedex(){
        //ON DEFINI UNE VARIABLE A 10% des PV
        $alertPv = $this->getPv() * 0.2;

        echo $this->getNom() . '<br>
        Puissance d\'attaque : ' . $this->getPa() . '<br>
        Points de vie  : ' . $this->getPVRestant() . '/' . $this->getPv() . '<br>';
        //SOUS LES 10% ON MET LE SIGNAL ROUGE
        if ($this->getPvRestant() <= $alertPv) {
            echo 'Votre niveau de point de vie est faible : 🔴 ';
        } else {
            echo 'Votre niveau de point de vie est satisfaisant : 🟢';
        }
    }
    //ATTAQUER
    public function attaquer($adversaire, $i) {
        $this->getPa();
        echo $this->getNom() . 'fait ' . $this->getPa . ' de dégâts sur ' . $this->getNom($adversaire);
        $adversaire->dgtRecu($this,$i);
    }

    public function dgtRecu($adversaire,$i) {
        $pvRestant = $this->getPv;
        $pvRestant = $pvRestant-($adversaire->dgtRecu()*$i);
    }
}

