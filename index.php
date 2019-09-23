<?php
  /*Disegnare la classe Persona con nome, cognome e indirizzo
    Disegnare la classe Studente con nome, cognome, indirizzo, programma di studi e tasse
    Disegnare la classe Professore con nome, cognome, indirizzo, specializzazione e paga

    Disegnare il trait FullName con una funzione in grado di ritornare una stringa
    contenente nome e cognome separati da spazio, e utilizzarlo dove ritenuto utile.

    Definire i costruttori di ogni classe.
    Definire la funzione toString() in ogni classe in modo da poter loggare i risultati

    Estendere le classi dove possibile
  */

  class Persona {

    public $nome;
    public $cognome;
    public $indirizzo;

    public function __construct($nome, $cognome, $indirizzo) {

      $this -> nome = $nome;
      $this -> cognome = $cognome;
      $this -> indirizzo = $indirizzo;
    }

    public function toString() {

      return $this -> nome . " " . $this -> cognome . " - " . $this -> indirizzo;
    }
  }

  class Studente extends Persona {

    public $programma_di_studi;
    public $tasse;

    public function __construct($nome, $cognome, $indirizzo, $programma_di_studi, $tasse) {

      parent::__construct($nome, $cognome, $indirizzo);

      $this -> programma_di_studi = $programma_di_studi;
      $this -> tasse = $tasse;
    }

    public function toString() {

      return parent::toString() . " - " . $this -> programma_di_studi . " - " . $this -> tasse;
    }
  }

  class Professore extends Persona {

    public $specializzazione;
    public $paga;

    public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga) {

      parent::__construct($nome, $cognome, $indirizzo);

      $this -> specializzazione = $specializzazione;
      $this -> paga = $paga;
    }

    public function toString() {

      return parent::toString() . " - " . $this -> specializzazione . " - " . $this -> paga;
    }

  }


  $persona1 = new Persona("Luca", "Sgracchio", "Via Gandolfo, 38");
  $studente1 = new Studente("Sergio", "Sbobba", "Via dei Ruminanti, 69", "Corso Full Stack Web Developer", "Pagamenti regolari");
  $professore1 = new Professore("Giorgio", "Herpes", "Via Catalani, 20", "Primario di Dermatologia", "4000€");


  echo $persona1 -> toString() . "<br>";
  echo $studente1 -> toString() . "<br>";
  echo $professore1 -> toString() . "<br>";


?>
