<?php 
namespace Aleksandra\Igra\Controllers;
use Aleksandra\Igra\Base\Controller;
use Aleksandra\Igra\Models\FactModel;

class FactsController extends Controller
{
	private $factModel;

	public function __construct()
	{
		$this->factModel = new FactModel();
	}
	 public function showFactAction() { 

	 	$view = 'facts_view.php';
	 	$fact = $this->factModel->getFacts();
	 	$title = $fact['title']; 
		$data = [
	 		'facts'=>$fact,
	 		'title'=>$title, 
	 	];

	 	return parent::generateResponse($view, $data);
	 }

	 public function oneFactAction($request) { 
	 	$getData = $request->params();
	 	$id = $getData['id'];
	 	$view = 'facts_view.php';
	 	$fact = $this->factModel->getFactById($id);
	 	$listFact = $this->factModel->getListFact();
	
	 	$title = $fact['title']; //зачем вообще эта строка?
		$data = [
	 		'facts'=>$fact,
	 		'title'=>$title, 
	 		'listFact'=>$listFact,
	 	];
	 	return parent::generateResponse($view, $data);
	 }

}