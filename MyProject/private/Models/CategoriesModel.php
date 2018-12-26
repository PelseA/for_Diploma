<?php 
namespace Aleksandra\Igra\Models;
class CategoriesModel
{
	public function getQuestions(){
		$questions = [
			[
				'legend'=>'Вопрос 1',
				'question'=>'Как называются растения сухих мест обитания, способные переносить продолжительную засуху и воздействие высоких температур?',
				'var1'=>'Гигрофиты',
				'var2'=>'Ксерофиты',
				'var3'=>'Мезофиты',
				'modal-href'=>'#openModal3',
				'modal-id'=>'openModal3',
				'tip'=>"В переводе с греческого 'КСЕРОС' означает сухой. 'ГИГРОС' - влажный. 'МЕЗОС' - средний."
			],
			[
				'legend'=>'Вопрос 2',
				'question'=>'Какое животное зимой впадает в спячку?',
				'var1'=>'Барсук',
				'var2'=>'Волк',
				'var3'=>'Белка',
				'modal-href'=>'#openModal4',
				'modal-id'=>'openModal4',
				'tip'=>"Только ОДИН представитель семейства куньих впадает зимой в спячку."
			],
			[
				'legend'=>'Вопрос 3',
				'question'=>'Самое большое озеро на планете Земля',
				'var1'=>'Озеро Мичиган',
				'var2'=>'Каспийское море',
				'var3'=>'Озеро Танганьика',
				'modal-href'=>'#openModal5',
				'modal-id'=>'openModal5',
				'tip'=>"Самый крупный замкнутый водоем находится на стыке Европы и Азии."
			],
			[
				'legend'=>'Вопрос 4',
				'question'=>'Самое большое озеро на планете Земля',
				'var1'=>'Озеро Мичиган',
				'var2'=>'Каспийское море',
				'var3'=>'Озеро Танганьика',
				'modal-href'=>'#openModal6',
				'modal-id'=>'openModal6',
				'tip'=>"Самый крупный замкнутый водоем находится на стыке Европы и Азии."
			]
		];
			//получение последних  статей из бд
		return $questions ;
	}

	public function getQuestionByLegend($legend) {
		//получить вопросы из бд
		return [
				'legend'=>'Вопрос 4',
				'question'=>'Самое большое озеро на планете Земля',
				'var1'=>'Озеро Мичиган',
				'var2'=>'Каспийское море',
				'var3'=>'Озеро Танганьика',
				'modal-href'=>'#openModal6',
				'modal-id'=>'openModal6',
				'tip'=>"Самый крупный замкнутый водоем находится на стыке Европы и Азии."
		];
	}

	public function getCategories(){
		$categ = [
			[
				'title' => 'Флора и фауна',
				'icon' => '../icons/salamandra.svg'
			],
			[
				'title' => 'О, да, еда!',
				'icon' => '../icons/food.png'
			],
			[
				'title' => 'Литература',
				'icon' => '../icons/ink.svg'
			],
			[
				'title' => 'История',
				'icon' => '../icons/sandglass.png'
			],
			[
				'title' => 'Технический прогресс',
				'icon' => '../icons/progress24.svg'
			],
			[
				'title' => 'Искусство и культура',
				'icon' => '../icons/column.svg'
			],
			[
				'title' => 'Вокруг света',
				'icon' => '../icons/earth.svg'
			],
			[
				'title' => 'Кот в мешке',
				'icon' => ''
			],
		];	return $categ;
	}
}