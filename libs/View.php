<?php
class View {
	function __construct() {
	}
	public function load($file, $callback = null) {
		if( file_exists($file) ) {
			$json = file_get_contents($file);
			if( $callback == null ) {
				echo $json;
			} else {
				echo $callback . '(' . $json . ');';
			}
		}
	}
}
