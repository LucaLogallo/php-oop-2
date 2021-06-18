<?php 
  require_once __DIR__ . "/User.php";
  echo __DIR__ . "/User.php";
  class Sconto extends User{
    public $codice_sconto =  0;
    public $codici_sconti = [
      [
        "codice" =>"01299012",
        "sconto" => 20
      ],
      [
        "codice" =>"1920837918273",
        "sconto" => 50
      ]  
    ];

    public function applySconto($_codice_sconto){
      if(!is_int($_codice_sconto))
    {
      // genero un'eccezione
      throw new Exception("I codici sconti devono essere numeri");
    }else{
      // logica calcol punti
      $newPrice = $this->setDiscount($_codice_sconto);
      return $newPrice;
    }
    }

    private function setDiscount($_codice_sconto){
      foreach($this->codici_sconti as $c){
        if(strcmp($this->c->codice,(string)$_codice_sconto) == 0){
          return $this->c->sconto;
        }else{
          return -1; //-1 è il codice errore che mi dice che il codice sconto inserito non è valido
        }
      }
    }

  }