<?php

class Hash extends Controller {

	function __construct() {
		parent::__construct();
	}

	function _default() 
	{	
		$this->view->load('store/test.json','my_callback_function');
	}

}
