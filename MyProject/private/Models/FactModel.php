<?php 
namespace Aleksandra\Igra\Models;
use Aleksandra\Igra\Base\DBConnection;

class FactModel
{
	private $db;
	public function __construct(){
		$this->db = new DBConnection();
	}

	public function getFactById($id){
        $sql = "SELECT * FROM Fact WHERE id=:id;";
        $params = ['id'=>$id];

        return $this->db->execute($sql, $params);
    }

    public function getListFact(){
        $sql = "SELECT id, title FROM Fact ORDER BY RAND() LIMIT 7";
        return $this->db->queryAll($sql);
    }
    public function getFacts(){
        $sql = "SELECT *  FROM Fact ORDER BY RAND()";
        return $this->db->queryAll($sql);
    }
    
}
	