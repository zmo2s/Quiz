<?php require 'question.php'; // J'inclus la classe.
// employe manager  qui prend en arametre la base de donnee et ajoute des employer 
class QuestionManager
{
    private $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function addQuestion(Question $emp)
    {
       
        $q=$this->db->prepare('INSERT INTO sentance(numero,phrase) VALUES(:numero,:phrase)');
        $q->bindValue(':numero',$emp->getNumero());
        $q->bindValue(':phrase',$emp->getPhrase());
   

        $q->execute();
    }

    public function listPhrase($nb)
    {
            $emp=[];

    

        $q=$this->db->query('SELECT * FROM sentance where numero='.$nb);



            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
                 $emp[]=new Question($donnes['numero'],$donnes['phrase']);
             }

return $emp;
    }

    public function listQuestion($nb)
    {
            $emp=[];

    

        $q=$this->db->query('SELECT * FROM questions where numero='.$nb);



            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
                 $emp[]=new Question($donnes['numero'],$donnes['phrase']);
             }

return $emp;
    }



    public function tableauReponse()
    {
        $emp=[];

    

        $q=$this->db->query('SELECT * FROM answer');



            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
                 $emp[]=new Question($donnes['numero'],$donnes['phrase']);
             }

return $emp;
    
}

public function taille()
{

    // renvoie un int 


    $emp=[];



    $q=$this->db->query('SELECT max(numero) FROM questions');

    $donnees = $q->fetchAll();


return $donnees[0][0];



}





}