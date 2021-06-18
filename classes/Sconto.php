<?php 
  require_once __DIR__ . "./User.php";

  class Sconto extends  User{
    public $codici_sconti = [
      [
        $codice = "01299012",
        $sconto = 20
      ],
      [
        $codice = "1920837918273",
        $sconto = 50
      ]
    ];

    public function applySconto($codice_sconto){
      if(!is_int($codice_sconto))
    {
      // genero un'eccezione
      throw new Exception("I codici sconti devono essere numeri");
    }else{
      // logica calcol punti
     /*  $newPrice = setDiscount($codice_sconto); */
      /* return $newPrice; */
    }
    }

   /*  private function setDiscount($codice_sconto){
      foreach($this->codici_sconti as $codice){
        if(strcmp($codice.$codice,(string)$codice_sconto) == 0){
          return $codice;
        }else{
          return -1; //-1 è il codice errore che mi dice che il codice sconto inserito non è valido
        }
      }
    } */

  }