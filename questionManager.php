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
       
        $q=$this->db->prepare('INSERT INTO questions(numero,phrase) VALUES(:numero,:phrase)');
        $q->bindValue(':numero',$emp->getNumero());
        $q->bindValue(':phrase',$emp->getPhrase());
   

        $q->execute();
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

    public function listReponse($nb)
    {
            $emp=[];

    

        $q=$this->db->query('SELECT * FROM reponse where numero='.$nb);



            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
                 $emp[]=new Question($donnes['numero'],$donnes['phrase']);
             }

return $emp;
    }



    public function rep()
    {
        $emp=[];

    

        $q=$this->db->query('SELECT * FROM reponse');



            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
                 $emp[]=new Question($donnes['numero'],$donnes['phrase']);
             }

return $emp;
    
}


}




