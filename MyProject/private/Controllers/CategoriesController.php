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
	 public function questionAction($category){
	 	$view = 'question_view.php';
	 	$title = ucfirst($category); 

	 	$questions = [
	[
		'legend'=>'Флора и фауна',
		'question'=>'Как называются растения сухих мест обитания, способные переносить продолжительную засуху и воздействие высоких температур?',
		'var1'=>'Гигрофиты',
		'var2'=>'Ксерофиты',
		'var3'=>'Мезофиты',
		'modal-href'=>'#openModal3',
		'modal-id'=>'openModal3',
		'tip'=>"В переводе с греческого 'КСЕРОС' означает сухой. 'ГИГРОС' - влажный. 'МЕЗОС' - средний."
	],
	[
		'legend'=>'Флора и фауна',
		'question'=>'Какое животное зимой впадает в спячку?',
		'var1'=>'Барсук',
		'var2'=>'Волк',
		'var3'=>'Белка',
		'modal-href'=>'#openModal4',
		'modal-id'=>'openModal4',
		'tip'=>"Только ОДИН представитель семейства куньих впадает зимой в спячку."
	],
	[
		'legend'=>'Флора и фауна',
		'question'=>'Самое большое озеро на планете Земля',
		'var1'=>'Озеро Мичиган',
		'var2'=>'Каспийское море',
		'var3'=>'Озеро Танганьика',
		'modal-href'=>'#openModal5',
		'modal-id'=>'openModal5',
		'tip'=>"Самый крупный замкнутый водоем находится на стыке Европы и Азии."
	],
	[
		'legend'=>'Флора и фауна',
		'question'=>'Дерево - чемпион Сибири по скорости роста',
		'var1'=>'Береза',
		'var2'=>'Тополь',
		'var3'=>'Сосна',
		'modal-href'=>'#openModal6',
		'modal-id'=>'openModal6',
		'tip'=>"Летом это дерево доставляет неприятности аллергикам"
	],
	[
		'legend'=>'Флора и фауна',
		'question'=>'Наиболее калорийный орех',
		'var1'=>'грецкий орех',
		'var2'=>'кокос',
		'var3'=>'арахис',
		'modal-href'=>'#openModal7',
		'modal-id'=>'openModal7',
		'tip'=>"..."
	],
	[
		'legend'=>'Флора и фауна',
		'question'=>'Из какого дерева делают спички?',
		'var1'=>'Осина',
		'var2'=>'Ель',
		'var3'=>'Сосна',
		'modal-href'=>'#openModal6',
		'modal-id'=>'openModal6',
		'tip'=>"В этом дереве мало смолистых веществ"
	]
];

	 	$data = [
	 		'questions'=>$questions,
	 		'title'=>$title, 
	 	];


	 	parent::generateResponse($view, $data);


	 }
}