<?php
namespace Aleksandra\Igra\Base;

class Session
{
	private $session;
	public function __construct()
	{
		$this->session = $_SESSION;
	}
	public function start() {
		session_start();
	}

	public function setData($key, $value) {
		if (!$key or !$value) {
			var_dump('передайте корректные $key и $value');
				return false;
		}
		$this->session[$key] = $value;
	// return true;
	}

	public function getData($kye) {
		if(!isset($this->session[$key])) {
			//выбросить исключение
			var_dump('$key не найден');
			return false;
		}
		return $this->session[$key];
	}

	public function isset($key){
		return isset($this->session[$key]);
	}

	public function close()
	{
		session_destroy();
	// session_unset(); //наверно можно установить время сессии
	// unset($_SESSION); можно ли так делать? 
	//может можно очистить данные сессии для текущего сценария так: $_SESSION = [];
		unset($this->session);
	}

}