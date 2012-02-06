<?php
class Controller {
	function __construct() {
		$this->view = new View();
<<<<<<< HEAD
		echo "in controller";
	}
	public function loadModel( $name ) {
		$path = MODEL_PATH . $name . '.php';
		if ( file_exists( $path ) ) {
			require $path;
			$modelName = $name . MODEL_POSTNAME;
=======
	}
	public function loadModel( $name ) {
		$path = 'models/' . $name . '.php';
		if ( file_exists( $path ) ) {
			require $path;
			$modelName = $name . '_Model';
>>>>>>> e2100d0f0c91e9932bf6b25a1f58e5447c780711
			$this->model = new $modelName();
		}
	}
}
?>
