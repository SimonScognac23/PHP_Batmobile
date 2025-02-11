<?php


//      Ereditarietà
// Ereditarietà permette di mettere in relazione una classe genitore con una classe figlia vincolando i cambiamenti della classe genitore anche nelle classi figlie
// tutto cio che io effettuo come cambiamento nella classe genitore si ripercuote sui figli, percio io vado se devo modificare qualcosa sulla classe genitore modificando anche i figli


//  Relazione is-a

// Composizione   has-a







//------------------    TYPE HINTING  -----------------------------------------------------------------------------------------------------------------------------

//class Person{


//public $name;

//public $surname;

//public $age;



//    DIPENDENZA INIETTATA DEPENDENCY INJECTION
// Sto facendo una dipendenza e gli dico che devi essere in queso modo per forza, quindi questa è una dipendenza iniettata
//public function __construct(string $_name, string $_surname, int $_age){   // la metodologia di suggerimento del tipo si chiama type hinting ossia ti suggerisco il tipo, ed è stata introdotta da PHP5
    // TYPE HINTING -> PHP5
  
   // $this->name = $_name;
  //  $this->surname = $_surname;
  //  $this->age = $_age;
//

  //  }

//}


//$person1 new Person();  // quando passo i dati del costruttore, il mio programma non sa che tipo di dato sono name,surname e age, devo istruire il mio programma a dire che tipo di dato deve passare


//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------





















//-----------------------------------   BATMOBILE  ----------------------------------------------------------------------------------------------------------------------
 







class Batmobile {

public $parteAnteriore;  // attaccare

public $partePosteriore;   //difendere

//public $nuovoattributo;   // creando questo nuovo attributo creandolo non va a dare fastidio a parteAnteriore e partePosteriore, perchè non c'è una relazione di parentela tra Lanciafiamme, Fumogeno e le altri classi che sono figlie di parteAnteriore e partePosteriore
// il perche nuovoattributo non va a influire su i figli diretti è perche Batmobile non estende nessuna componente che abbiamo creato!

//  CONSTRUCTOR INJECTION

public function __construct(ParteAnteriore $_parteAnteriore, PartePosteriore $_partePosteriore){  // qua gli dico di accettare come parametro non solo un parametro primitivo, anchedegli oggetti
 // io scrivendo ParteAnteriore e PartePosteriore istruisco il mio programma ad accettare i figli diretti di ParteAnteriore e PartePosteriore!! 

  $this->parteAnteriore = $_parteAnteriore;// valorizziamo gl attributi
  $this->partePosteriore = $_partePosteriore;

//parte ant. e post. voglio strutturarle come entita logiche separate e voglio implementarle in quello che è la costruzione della mia macchina



    }





public function attaccare(){    // creo un metodo dentro la classe Batmobile

    $this->parteAnteriore->attacco();   // siamo dentro la classe Batmobile e da qui accedo all'oggetto parteAnteriore ma da dentro la classe Batmobile e per far cio uso il this
// ORA PER ATTACCARE NON DEVO FARE TUTTI I PASSAGGI CHE HO FATTO ALLA LINEA  --> 163


    }

    public function difendere(){      // creo un metodo dentro la classe Batmobile
        
      $this->partePosteriore->difendere();

    }

}









// -------------------------Creazione di oggetti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



$__lanciafiamme = new Lanciafiamme();   // creiamo un nuovo oggetto di tipo Lanciafiamme senza passargli nessun parametro, perche dentro class Lanciafiamme (sotto) non ci sta nessun costruttore!! e quindi non va in errore

$__fumogeno = new Fumogeno();// anche qui non ha nessun costruttore e quindi non dobbiamo passargli nessun parametro



$__rampino = new Rampino(); // Qui creiamo le istanze di oggetti

$__lanciarazzi = new Lanciarazzi();




$batmobile0 = new Batmobile($__lanciarazzi, $__rampino);

$batmobile = new Batmobile($__lanciafiamme, $__fumogeno); // NOI dobbiao passargli degli oggetti alla classe Batmobile, noi dobbiamo passargli un tipo di dato istanziato 
// noi gli passiamo gli argomenti __lanciafiamme e __fumogeno che abbiamo appena creato come nuovo oggetto istanziato
// ora il mio oggetto batmobile è composto da altri 2 oggetti  ---->      __lanciafiamme e __fumogeno
// io lo solo istruito ad accettare i 2 parametri, ma i VERI OGGETTI li pho passati da fuori, ossai oggetti esterni a batmobile che poi diventano parte integrante dell'oggetto batmobile





var_dump($batmobile);   // facendo il var_dump  avrò: un oggetto che è batmobile che ha  come attributo parteAnteriore e che anch'esso è un oggetto di tipo LanciaFiamme, e un altro attributo partePosteriore che anch'esso è un oggetto di tipo Fumogeno
// quindi un oggetto composto da altri oggetti

var_dump($batmobile0);




// INLINE VARIABLE-->>  1. creo l'oggetto   2 Passo l'istanza di oggetto
// cambia che l'oggetto new Lanciafiamme e new Rampino non hanno un nome, ma a noi poco importa, non ci interessa
$batmobile1 = new Batmobile(  new Lanciafiamme() , new Rampino()  );



//$batmobile1->parteAnteriore->attacco();   // 1 prendo il mio oggetto di classe batmobile creato        2 gli chiedo il mio attributo parteAnteriore che è un ulteriore oggetto e quindi posso entrare negli  attributi di parteAnteriore       3 gli dico attiva il metodo attacco(), ossia invoco il metodo che appartiene a l'oggetto di parteAnteriore





// collegamento logico per richiamare un comportamento di un mio oggetto direttamente dall'oggetto contenitore senza passare per l'attributo
$batmobile1->attaccare(); // adesso posso chiedere a batmobile1 di attaccare, grazie al codice che abbiamo scritto sulla linea 108
// quando sarà invocata questa funzione lui cerchera un metodo chhe si chiama attaccare, percio entra  nella linea 108 lo richiama lui stesso l'oggetto sia batmobile1 e gli chiede di lanciare il metodo dentro l'oggetto parteAnteriore

$batmobile1->difendere();











//---------------------PARTE ANTERIORE--------------------------------------------------------------------------------------------------------------------------------------------------------

abstract class ParteAnteriore{           // creo una classe perche la parte anteriore avra un comportamento specifico ossia attacchino!!!
 // lo definisco abstract perche è un template, o meglio un astrazione, ossia una modalita su cui io poi andro a strutturare gli effettivi attacchi




  abstract public function attacco();  // parte anteriore non avendo definito che cosa è, non avra unattacco definito 

}


class LanciaFiamme extends ParteAnteriore{

  public function attacco(){
    
    echo "Brucio tutto\n";
  }

// tutti i miei oggetti futuri che costruisco partendo da parte anteriore DEVONO IMPLEMENTARE IL METODO  ATTACCO()
// io istruisco il mio programma a definire il comportamento  delle sottoclassi
}


class Lanciarazzi extends ParteAnteriore{

public function attacco(){

  echo "Distruggo tutto\n";

}

}








//---------------PARTE POSTERIORE----------------------------------------------------------------------------------------------------------------------------


abstract class PartePosteriore {

abstract public function difendi();


}


class Fumogeno extends PartePosteriore{

  public function difendi(){

    echo "Muro di fumo non mi vedi!!!\n";

  }

}


class Rampino extends PartePosteriore{

  public function difendi(){

    echo "Scappo via!!!\n";

  }

}



