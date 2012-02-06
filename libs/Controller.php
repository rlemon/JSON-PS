<?php
class Controller {
	function __construct() {
		$this->view = new View();
		echo "in controller";
	}
	public function loadModel( $name ) {
		$path = MODEL_PATH . $name . '.php';
		if ( file_exists( $path ) ) {
			require $path;
			$modelName = $name . MODEL_POSTNAME;
			$this->model = new $modelName();
		}
	}
}
?>
