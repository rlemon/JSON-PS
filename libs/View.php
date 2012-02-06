<?php
class View {
	function __construct() {
	}
<<<<<<< HEAD
	public function load($file, $callback = null) {
		if( file_exists($file) ) {
			$json = file_get_contents($file);
			if( $callback == null ) {
				echo $json;
			} else {
				echo $callback . '(' . $json . ');';
			}
=======
	public function load($json, $callback = null) {
		if( $callback == null ) {
			echo $json;
		} else {
			echo $callback . '(' . $json . ');';
>>>>>>> e2100d0f0c91e9932bf6b25a1f58e5447c780711
		}
	}
}
