<?php
namespace Aleksandra\Igra\Controllers;
use Aleksandra\Igra\Base\Controller;
use Aleksandra\Igra\Models\InfoModel;

class InfoController extends Controller
{
	private $infoModel;
	public function __construct()
	{
		$this->infoModel = new InfoModel();
	}
	public function rullsAction()
	{
	 	$view = 'rulls_view.php';
	 	$title = "Правила"; 
	 	$data = [
	 		'title'=>$title, 
	 	];
	 	return parent::generateResponse($view, $data);
	}

	public function quickAction()
	{
	 	$view = 'quick_game.php';
	 	$title = "Быстрая игра"; 
	 	$data = [
	 		'title'=>$title, 
	 	];
	 	return parent::generateResponse($view, $data);
	}
	
	public function aboutAction()
	{
	 	$view = 'about_view.php';
	 	$title = 'О проекте'; 

	 	$data = [
	 		'title'=>$title, 
	 	];

	 	return parent::generateResponse($view, $data);

	}
	public function newsAction()
	{
	 	$view = 'news_view.php';
	 	$title = 'Новости'; 

	 	$data = [
	 		'title'=>$title, 
	 		// 'news'=>$news,
	 	];

	 	return parent::generateResponse($view, $data);

	}

}