<?php

class Hash extends Controller {

	function __construct() {
		parent::__construct();
	}

	/*
	 * /get/<hash>/<callbackfunctionname>
	 * */
	function get($hash, $callback = null) {
		$file = 'store/JSONPS_' . $hash . '.json';
		if( file_exists( $file ) ) {
			$this->view->load(file_get_contents($file), $callback);
		} else {
			$this->view->load('{"errors":["message":"The requested hash does not exist!"]}', $callback);
		}
		
	}
	/*
	 * /set/<hash>/<callbackfunctionname>?data=<jsondata>
	 * */
	function set($hash, $callback = null) {
		$file = 'store/JSONPS_' . $hash . '.json';
		if ( file_exists( $file ) ) {
			if( $pointer = fopen('store/JSONPS_' . $hash . '.json','w+') ) {
				fwrite($pointer, $_GET['data']);
				$this->get($hash, $callback);
			} else {
				$this->view->load('{"errors":["message":"Could not write data to hash!"]}', $callback);
			}
		} else {
			$this->view->load('{"errors":["message":"The requested hash does not exist!"]}', $callback);
		}
	}

	function create($callback = null) {
		while(true) {
			$hash = md5(mt_rand(0,9999999));;
			if ( !file_exists('store/JSONPS_' . $hash . '.json') ) {
				if( $pointer = fopen('store/JSONPS_' . $hash . '.json','w+') ) {
					fclose($pointer);
					$this->view->load('{"new_hash":"' . $hash . '"}', $callback);
				} else {
					$this->view->load('{"errors":["message":"Could not create new hash!"]}', $callback);
				}
				break;
			}
		}
	}
	
	function _default() 
	{	
		echo '{"errors":["message":"Please select a function!"]}';
	}

}
