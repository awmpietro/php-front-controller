<?php
class Autoloader {
	
	/**
	* Include files and instantiate classes that are under default rules of the system like Controller, Models, Libs. 
	* These classes follow certain rules like to be namespaced, and this namepsace matches the directory name. The spl_autoload_register class auto instantiate the class.
	* @params $className = string for the name of the class: "Namespace\ClassName"
	*/
	public static $file;
	
    static public function loader($className) {
		$path = explode("\\", $className);
		$file = '';
		$keys = array_keys($path);
		$lastKey = array_pop($keys);
		foreach($path as $key => $value){
			if($key === $lastKey){
				$file .= $value . ".php";
			}else{
				$file .= strtolower($value) . '/';
			}
		}
		if (!file_exists($file)){
			return FALSE;
		}
		include $file;
	}
}
spl_autoload_register('Autoloader::loader');