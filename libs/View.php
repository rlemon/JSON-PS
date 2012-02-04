<?php
class View {
	function __construct() {
	}
	public function load($json, $callback = null) {
		if( $callback == null ) {
			echo $json;
		} else {
			echo $callback . '(' . $json . ');';
		}
	}
}
