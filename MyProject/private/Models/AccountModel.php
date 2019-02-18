<?php
namespace Aleksandra\Igra\Models;
use Aleksandra\Igra\Base\DBConnection;
use Aleksandra\Igra\Models\Exceptions\AuthException;
use Aleksandra\Igra\Models\Exceptions\RegistrationException;
use Aleksandra\Igra\Models\Exceptions\AddQuestionException;


class AccountModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    const PSW_WRONG = "PSW_WRONG";
    const QUESTION_ADDED = "QUESTION_ADDED";

    protected $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function loginExists($userData){
        $sql = 'SELECT login FROM User WHERE login =:login';
        $params = ['login'=>$userData['login']];
        $statement = $this->db->execute($sql, $params, false);
        return $statement;
    }

    public function addUser($userData){

        if ($this->loginExists($userData)){
            throw new RegistrationException('Логин занят.');
        }
        $sql = "INSERT INTO User (login, hash, email)
              VALUES (:login, :hash, :email)";
        $params = [
            'login'=>$userData['login'],
            'hash'=>password_hash($userData['pwd'], PASSWORD_DEFAULT),
            'email'=>$userData['email'],
        ];

        $statement = $this->db->update($sql, $params, false);
        
        if($statement) {
           	  $this->authUser($userData);
           	  return self::USER_ADDED;
        }
        throw new RegistrationException('Регистрация не удалась! Попробуйте позже.');
    }

    public function authUser($userData){
        $sql = "SELECT id, login, hash FROM User WHERE email=:email";
        $params = [
            'email'=>$userData['email']
        ];

        $statement = $this->db->execute($sql, $params, false);

        if($statement && password_verify($userData['pwd'], $statement['hash'])) {

            $_SESSION['auth'] = true;
            $_SESSION['login'] = $statement['login'];
            $_SESSION['email'] = $statement['email'];
            $_SESSION['id'] = $statement['id'];
            return self::USER_AUTH;

        }
        throw new AuthException('Login or password was uncorrect!');       	
    }
    public function infoUser($userData){

        $sql = "SELECT * FROM User WHERE id=:id";
        $params = [
            'id'=>$_SESSION['id'],
        ];
  
        return $this->db->execute($sql, $params, false);
        
    }
    /**
     * array (size=1)
     * 'answers' => 
     * array (size=5)
     *    12 => string '1' (length=1)
      16 => string '0' (length=1)
      13 => string '1' (length=1)
      17 => string '0' (length=1)
      14 => string '1' (length=1)
     */
    public function countScore($answers){
 		$select = "SELECT id, score, count_tests FROM User WHERE id=:id";
 		$update = "UPDATE User SET score=:score, count_tests=:count_tests 
 					WHERE id=:id";
 		$params = [
 			'id' => $_SESSION['id']
 		];
		$params = $this->db->execute($select, $params, false);
		if($params){
 			$params['score'] += array_sum($answers);
 			$params['count_tests'] ++;
 			if(!$this->db->execute($update, $params)) {
 				return self::DB_ERROR;
 			}
		}
    }

    public function addOwnQuestion($postData){
        $sql = "INSERT INTO Users_question (category, 'text', right_answer, wrong1, wrong2, tip, source)
              VALUES (:category, :text, :right_answer, :wrong1, :wrong1, :tip, :source)";
        $params = [
            'category'=>$postData['select_category'],
            'text'=>$postData['text'], 
            'right_answer'=>$postData['right_answer'],
            'wrong1'=>$postData['wrong1'], 
            'wrong2'=>$postData['wrong2'], 
            'tip'=>$postData['tip'], 
            'source'=>$postData['source'] 
        ];

        $statement = $this->db->execute($sql, $params, false);
     var_dump($postData['select_category']);
       
        if($statement) {
           	  $this->authUser($userData);
           	  return self::QUESTION_ADDED;
        }
        throw new AddQuestionException('Вопрос не добавлен! Попробуйте позже.');
    }

}

