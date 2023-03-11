<?php

class App{

	protected $controller = 'Absensi';
	protected $function = 'index';
	protected $params = [];

	public function __construct(){
		$url = $this->parseURL();

		if(file_exists('../app/controllers/' . $url[3] . '.php')){
			$this->controller = $url[3] ;
			unset($url[3]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		if(isset($url[4])){
			if(method_exists($this->controller, $url[4])){
				$this->function = $url[4];
				unset($url[4]);
			}
		}

		if(!empty($url)){
			$this->params = array_values($url);
		}

		call_user_func_array([$this->controller, $this->function], $this->params);
	}

	public function parseURL(){
		if( isset($_SERVER['REQUEST_URI']) ){
			$url = explode('/', $_SERVER['REQUEST_URI']);
			return $url;
		}
	}
}