<!-- traccia
  Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
  Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
  Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
  `$c = new CreditCard(..);
  $user->insertCreditCard($c);`
  BONUS:
  Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).


  utente{
    nome,
    cognome,
    username,
    password,
    premium,
    eta //regola per determinati prodotti eta >18 
    codice sconto
  }
  sconto extended utente ($codice sconto){
    codici_sconto = [
      [
        codice: "01299012",
        sconto: 20
      ],
      [
        codice: "1920837918273",
        sconto: 50
      ]
    ];

    public function applySconto($codice sconto){
      if(!is_int($codice sconto))
    {
      // genero un'eccezione
      throw new Exception("I codici sconti devono essere numeri");
    }else{
      // logica calcol punti
      $newPrice = setDiscount($codiceSconto);
      return $newPrice;
    }
    };

    private function setDsicount($codiceSconto){
      foreach($codici_sconti as $codice){
        if(strcmp($codice.codice,(string)$codiceSconto) == 0){
          return $codice.sconto;
        }else{
          return -1; //-1 è il codice errore che mi dice che il codice sconto inserito non è valido
        }
      }
    }

  }

  //funzione trait per unire il prodotto con lo sconto e far stampare sia il prezzo non scontato che quello con lo sconto applicato

  trait Costo{
    costo,
    sconto
    totale
  }

  carta di credito associata all'utente{ //tutti gli attributi dell'utente
    pan //controllo con stlen(string)pan =16
    nome,
    cognome,
    data_scadenza,
    cvv  
  }
  prodotto{
    nome,
    descrizione,
    costo,
    codice, //possibile controllo su età di acquisto in base a se il codice contiene un determinato subcodice,
    casa_produttrice

  }


 -->

<?php 

  require_once __DIR__ . "/classes/User.php";
  //require_once __DIR__ . "/classes/Sconto.php";
echo 'funzia fino a qui';
  $giuseppe = new User("giuseppe", "verdi", "giusVerd", "ciao123", "no", 45, 1234546);
  $giuseppe->applySconto(123454546);
  var_dump($giuseppe);


  /* $prodotti = [new Prodotto("cocacola", 1.5),new Prodotto("cocacola0", 1.5)];
  $user -> add($prodotti)
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h3> Ciao <?php echo $giuseppe->nome ?> </h3>
  <h3> Ciao <?php echo $giuseppe->cognome ?> </h3>
  <h3> Ciao <?php echo $giuseppe->username ?> </h3>
  <h3> Ciao <?php echo $giuseppe->password ?> </h3>
  <h3> Ciao <?php echo $giuseppe->premium ?> </h3>
  <h3> Ciao <?php echo $giuseppe->eta ?> </h3>
  <h3> Ciao <?php echo $giuseppe->codice_sconto ?> </h3>
  
</body>
</html>



 







