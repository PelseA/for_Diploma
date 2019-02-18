<?php
// require_once "../Models/CategoriesModel.php";

namespace Aleksandra\Igra\Controllers;
use Aleksandra\Igra\Base\Controller;
use Aleksandra\Igra\Models\CategoriesModel;


class IndexController extends Controller
{

	private $categoryModel;

	public function __construct()
	{
		$this->categoryModel = new CategoriesModel();
	}

	public function indexAction()
	{
		$title = 'Главная';
		$view = 'index_view.php';

		$category = $this->categoryModel->getCategories();
	//var_dump($category);
		$fact = $this->categoryModel->getFacts();//себе:и не вздумай это еще раз отсюда убрать
		$data = [
			'categories'=>$category,
			'facts'=>$fact,
			'title'=>$title,
			// 'style' =>$style
		];
		
		return parent::generateResponse($view, $data);
	}


	
	
}
?>