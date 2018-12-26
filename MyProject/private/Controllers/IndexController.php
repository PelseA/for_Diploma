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
		// $this->goodsModel = new GoodsModel();
	}

	public function indexAction()
	{
		$title = 'Главная';
		$view = 'index_view.php';

		$articles = $this->categoryModel->getCategories();
		// $goods =  $this->goodsModel->getGoods(5);
		$data = [
			'title'=>$title

		];

		$categ1 = [
	[
		'title' => 'Флора и фауна',
		'icon' => 'icons/salamandra.svg'
	],
	[
		'title' => 'О, да, еда!',
		'icon' => '../icons/food.png'
	],
	[
		'title' => 'Литература',
		'icon' => '../icons/ink.svg'
	]
];
		parent::generateResponse($view, $data);
	}


	
	
}
?>