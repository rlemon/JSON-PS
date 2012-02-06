<?php
/**
 * Hash
 *
 * This is the main controller for accessing and storing data
 * - create
 * - get
 * - set
 *
 * @package	JSON-PS
 * @author	rlemon
 * 
 * All errors return loadScript('false', $callback);
 *
 */
class Hash extends Controller {

	function __construct() {
		parent::__construct();
	}

	/**
	 * get()
	 * gets json data
	 *
	 * @param	hash
	 * @param	callback (optional)
	 * @return	loadScript( $jsonData, $callback )
	 */
	function get($hash, $callback = null) {
		$file = STORE_PATH . FILE_PRECURSOR . $hash . '.' . FILE_TYPE;
		if( file_exists( $file ) ) {
			$this->view->loadScript(file_get_contents($file), $callback);
		} else {
			$this->view->loadScript('false', $callback);
		}
		
	}

	/**
	 * set()
	 * overwrites all json data in specific hash
	 *
	 * @param	hash
	 * @param	callback (optional)
	 */
	function set($hash, $callback = null) {
		$file = STORE_PATH . FILE_PRECURSOR . $hash . '.' . FILE_TYPE;
		if ( file_exists( $file ) ) {
			if( $pointer = fopen( $file ,'w+') ) {
				fwrite($pointer, $_GET['data']);
				$this->get($hash, $callback);
			} else {
				$this->view->loadScript('false', $callback);
			}
		} else {
			$this->view->loadScript('false', $callback);
		}
	}

	/**
	 * create()
	 * creates blank file for data storage
	 *
	 * @param	callback (optional)
	 * @return	loadScript( "$hash", $callback )
	 */
	function create($callback = null) {
		while(true) {
			$hash = md5(mt_rand(0,9999999));
			$file = STORE_PATH . FILE_PRECURSOR . $hash . '.' . FILE_TYPE;
			if ( !file_exists($file) ) {
				if( $pointer = fopen($file,'w+') ) {
					fclose($pointer);
					$this->view->loadScript('"' . $hash . '"', $callback);
				} else {
					$this->view->loadScript('false', $callback);
				}
				break;
			}
		}
	}

	/**
	 * _default()
	 * default method
	 *
	 * Errors always.
	 */
	function _default() 
	{	
		$this->view->loadScript('false', $callback);
	}

}
