<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number){
        if(($this->count-$number)<0){
            $nbPoneysARetirer = $number - $this->count;
            echo "\n".$this->count." poneys ont été retirés de l'enclos et ".$nbPoneysARetirer." n ont pas pu être retirés";
            $this->count=0;
            throw new Exception("Tu ne peux pas prendre de poneys, ils sont déjà tous partis en balade");
        }else if($number < 0){
            throw new Esxception("Tu ne peux pas retirer un nombre négatif de poneys");
        }
        $this->count -= $number;
    }

    /**
     * Ajoute un poney dans le champ
     * 
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void 
     */

    public function addPoneyFromField(int $number){

        if(!$this->isPlaceAvailable($number)){
            throw new Exception("Tu ne peux pas ajouter plus de poneys");
        }
	    $this->count += $number;
	}

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames()
    {

    }

    /**
     * TRUE s'il reste des places disponibles et FALSE s'il n'en reste pas
     * 
     * @return boolean 
     */
    public function isPlaceAvailable($number){
        if($this->count + $number <15){
            return true;
        }
        return false;
    }


}
?>
