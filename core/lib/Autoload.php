<?php
Class Autoload {
    private $arr_class = ['route','requests','alls','breadcrumb'];
	public function __construct() {
	    spl_autoload_register([$this, 'autoload']);
	    $this->help_class();
	}
	private function autoload($class) {
		$filePath = dirname(__FILE__) .'/'.$class.'.php';
		if(file_exists($filePath)) {
			require_once($filePath);
		} else {
			// throw new Exception("Class $filePath does not exists", 1);
		}
	}
	private function help_class () {
		foreach ($this->arr_class as $k) {
			$filePath = dirname(__FILE__) .'/'.$k.'.php';
			$filePath = str_replace("lib","help",$filePath);
			require_once ($filePath);
		}
	}
}