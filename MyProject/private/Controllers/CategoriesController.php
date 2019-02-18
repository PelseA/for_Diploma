<?php
namespace Aleksandra\Igra\Controllers;
use Aleksandra\Igra\Base\Controller;
use Aleksandra\Igra\Models\CategoriesModel;

class CategoriesController extends Controller
{
	private $categoryModel;
	public function __construct()
	{
		$this->categoryModel = new CategoriesModel();
	}
	 public function questionAction($request){
	 	$getData = $request->params();
	 	$category = $getData['categName'];
	 	$view = 'question_view.php';
	//var_dump($category);
	 	$questions = $this->categoryModel->getQuestionByCategory($category);
	 //$answers = $this->categoryModel->getAnswerById($id_question);
	//var_dump($questions);

	//
	 	$title = $questions['category'];
	 	$data = [
	 		'title'=>$title, 
	 		'questions'=>$questions,
	 		//'answers'=>$answers,
	 	];
	 	return parent::generateResponse($view, $data);
	 }

	 public function questionHandlerAction(){
	//как сделать так чтобы по  submit сработал этот контролер
		
	 	$answers = $this->categoryModel->getAnswer();

	 	


	 }

}