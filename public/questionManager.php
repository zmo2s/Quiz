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
       
        $q=$this->db->prepare('INSERT INTO Questions(Type,Question,Categorie,Rep1,Rep2,Rep3,Rep4,RepCNumber) VALUES(:Type,:Question,:Categorie,:Rep1,:Rep2,:Rep3,:Rep4,:RepCNumber)');
        $q->bindValue(':Type',$emp->getType1());
        $q->bindValue(':Question',$emp->getQuestion());
        $q->bindValue(':Categorie',$emp->getCategorie());
        $q->bindValue(':Rep1',$emp->getRep1());
        $q->bindValue(':Rep2',$emp->getRep2());
        $q->bindValue(':Rep3',$emp->getRep3());
        $q->bindValue(':Rep4',$emp->getRep4());
		$q->bindValue(':RepCNumber',$emp->getRepCNumber());
        $q->execute();
    }

	public function GetQuestionNumber()
    {
        $emp=0;
        $q=$this->db->query('SELECT * FROM Questions');
            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
				$emp=$emp+1;
             }
return $emp;
    }
	
	public function GetQuestionNumberByCategory($cat)
    {
        $emp=[];
		$cpt=0;
        $q=$this->db->query('SELECT * FROM Questions where Categorie='.$cat);
            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
				$emp[$cpt]=$donnes['ID'];
				$cpt=$cpt+1;
				
             }
return $emp;
    }
	
    public function listQuestionbyID($nb)
    {
        $emp=[];
        $q=$this->db->query('SELECT * FROM Questions where ID='.$nb);
            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
			 $emp[]=new Question($donnes['Type'],$donnes['Question'],$donnes['Categorie'],$donnes['Rep1'],$donnes['Rep2'],$donnes['Rep3'],$donnes['Rep4'],$donnes['RepCNumber']);
             }
return $emp;
    }
	public function GetOneQuestionInfo($question)
	{
		// $Q->ID = $question->getID();
		$Q->Type = $question->getType1();
		$Q->Question = $question->getQuestion();
		$Q->Categorie = $question->getCategory();
		$Q->Rep1 = $question->getRep1();
		$Q->Rep2 = $question->getRep2();
		$Q->Rep3 = $question->getRep3();
		$Q->Rep4 = $question->getRep4();
		$Q->RepCNumber = $question->getRepCNumber();

		// var_dump($Q);
		// json_encode($data, JSON_UNESCAPED_UNICODE)
		$JSON = json_encode($Q, JSON_UNESCAPED_UNICODE);
		// echo $JSON;
		// var_dump($JSON);
		return $JSON;
	}
	
	public function GetAllQuestionQuiz($number)
	{
		$array = [];
		for ($i = 1; $i <= $number; $i++) {
			
			$rand = rand(1,$this->GetQuestionNumber());
			
			$question = $this->listQuestionbyID($rand);
			// var_dump($question);
			$truequestion = $this->GetOneQuestionInfo($question[0]);
			if ($i == 1 and $number == 1)
			{
				return $truequestion;
			}
			$array[$i-1] = $truequestion;
		
		}
		return $array;

	}
	
	public function GetAllQuestionByCategory($number, $cat)
	{
		for ($i = 1; $i <= $number; $i++) {
			$IDtable = $this->GetQuestionNumberByCategory($cat);
			$rand = $IDtable[rand(0,count($IDtable)-1)];
			$question = $this->listQuestionbyID($rand);
			$truequestion = $this->GetOneQuestionInfo($question[0]);
		}

	}
	
	public function GetCategoryNameByID($id)
	{
        $q=$this->db->query('SELECT * FROM Categories  where ID='.$id);
            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
				$name=$donnes['Nom'];
             }
		return $name;
	}
	
	public function GetCategoryNameByQuestionID($id)
	{
        $q=$this->db->query('SELECT * FROM Categories,Questions  where Categories.ID=Questions.Categorie AND Questions.ID='.$id);
            while ($donnes =$q->fetch(PDO::FETCH_ASSOC))
             {
				 var_dump($donnes);
				$name=$donnes['Nom'];
             }
		return $name;
	}
	
}


/*
var_dump($manager);
$perso = new Question(1,"ouep");
$manager->addQuestion($perso);
var_dump($manager);
$manager->listQuestion();
echo "<pre>";
var_dump($manager->listQuestion());
echo "<pre>";
*/