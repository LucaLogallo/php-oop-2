<?php 

  require_once __DIR__ . "./Sconto.php";
  
  class User{

    use Sconto;
    public $nome;
    public $cognome;
    public $username;
    public $password;
    public $premium;
    public $eta; //regola per determinati prodotti eta >18 
    public $codice_sconto;
    protected $discount = 0;
    static $k = 0; 

    public function __construct($_nome, $_cognome, $_username, $_password, $_premium, $_eta,$_codice_sconto)
    {
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->username = $_username;
      $this->password = $_password;
      $this->premium = $_premium;
      $this->eta = $_eta;
      $this->codice_sconto = $_codice_sconto;
      self::$k++;
    }

  }

?>