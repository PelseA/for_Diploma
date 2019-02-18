<?php 
namespace Aleksandra\Igra\Models;
use Aleksandra\Igra\Base\DBConnection;
class CategoriesModel
{
	private $db;
	public function __construct()
	{
        $this->db = new DBConnection();	
	}

	/*public function getQuestionByCategory($category) {
		$sql = "SELECT * FROM question WHERE categName=:category ORDER BY RAND() LIMIT 4";

        $params = ['category'=>$category];

        return $this->db->execute($sql, $params);
	}*/
	public function getQuestionByCategory($category) {
		$sql = "SELECT 
					q.id, 
				    q.category, 
				    q.question, 
				    q.tip, 
				    a.answer, 
				    a.true_false 
				FROM `question` q 
				JOIN `answer` a ON q.id = a.question_id
				WHERE q.categName=:category
				ORDER BY RAND(q.id)
				LIMIT 15";

        $params = ['category'=>$category];

        $result = $this->db->execute($sql, $params);
        return $this->prepareQuestions($result);
	}

	private function prepareQuestions($result){
		$questions = [];
		foreach($result as $row) {
			if(isset($temp) && $temp['id'] != $row['id']) {
				$questions[] = $temp;
				$temp = $this->getQuestion($row);
			} else if (!isset($temp)) {
				$temp = $this->getQuestion($row);
			}
			$temp['answers'][] = $this->getAnswer($row);
		}
		if (isset($temp)) {
			$questions[] = $temp;
		}
		return $questions;
	}

	private function getQuestion($row){
		return [
			id => $row['id'],
			category => $row['category'],
			tip => $row['tip'],
			question => $row['question'],
			answers => []
		];
	}

	private function getAnswer($row){
		return [
			answer => $row['answer'],
			true_false => $row['true_false']
		];
	}

	public function getCategories(){
		$sql = "SELECT * FROM Category";
      
        return $this->db->queryAll($sql);
	}
	public function getAnswerById($id_question){
		$sql = "SELECT * FROM Answer WHERE Question_id=:id_question";
		$params = ['id_question'=>$id_question];

		return $this->db->execute($sql, $params);
		
	}
	public function getFacts(){ //себе:и не вздумай ее еще раз отсюда убрать
        $sql = "SELECT * FROM Fact ORDER BY RAND()";
      
        return $this->db->queryAll($sql);
    }
	
}