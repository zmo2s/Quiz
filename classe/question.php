<?php

final class Question
{
    //pas private pour que l'ajax fonctione sinon le tableau serai vide faudrai créer une fonction spécial pour autoriser le parse de l'objet
    public $numero;
    public $phrase;

 



     function __construct($numero,$phrase)
    {
        $this->numero=$numero;
        $this->phrase=$phrase;
    
      
   
    }

function getNumero()
{
    return $this->numero;
}

function getPhrase()
{
        return $this->phrase;
}

}
//$perso = new Question(1,"salut");
//echo $perso->getNumero();

   
    