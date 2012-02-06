<?php
class View {
	function __construct() {
	}
	public function loadScript($json, $callback = null) {
		header('Content-type: text/javascript');
		if( $callback == null ) {
			echo $json;
		} else {
			echo $callback . '(' . $json . ');';
		}
	}
	public function loadHTML($file) {
		include $file;
	}
}
