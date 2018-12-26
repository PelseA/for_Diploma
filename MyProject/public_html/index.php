<?php
//ini_set('display_errors', 'On'); - в OPServer уже включены
require __DIR__ . '/../vendor/autoload.php';

// require_once __DIR__ . '../private/Models/GoodsModel.php';
// require_once __DIR__ . '../private/Models/ArticleModel.php';
// require_once __DIR__ . '../private/Base/Controller.php';
// require_once __DIR__ . '../private/Controllers/ArticleController.php';
// require_once __DIR__ . '../private/Controllers/IndexController.php';

run();

function run() {
	$controller = 'Index';
	$action = 'index';
	$get = null;

	$routes = explode('/', $_SERVER['REQUEST_URI']);// разбиваем запрос по '/'
	//var_dump($rputes);
	if($routes[1]) {
		$controller = $routes[1]; //имя контроллера goods
	}
	if($routes[2]) {
		$action = $routes[2];// получили имя метода index
	}
	if($routes[3]) {
		$get = $routes[3]; // условно параметры get запроса
	}
	$controller = 'Aleksandra\Igra\Controllers\\' . ucfirst(strtolower($controller)) . 'Controller';
	// Index . Controller
    // IndexController
//    var_dump("Controller: $controller");

	$action = strtolower($action) . 'Action';
    // index . Action
    //  indexAction
//    var_dump("Action: $action");

	if(!class_exists($controller)) {
		//выбросить исключения класс не найден
		var_dump("класс не найден");
		return false;
	}

	$controller = new $controller(); //IndexController
	//    $controller = new IndexController();

	$controller->$action($get); // indexAction
//    $controller->indexAction();
	
}