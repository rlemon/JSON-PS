<?php
class Bootstrap {
	function __construct() {
		$url = isset( $_GET[ 'url' ] ) ? explode( '/', rtrim( $_GET[ 'url' ], '/' ) ) : null;
<<<<<<< HEAD
		print_r($url);
=======
>>>>>>> e2100d0f0c91e9932bf6b25a1f58e5447c780711
		if ( empty( $url[ 0 ] ) ) {
			$url[ 0 ] = 'hash'; // default value
		}
		$file = 'controllers/' . $url[ 0 ] . '.php';
		if ( !file_exists( $file ) ) {
			throw new Exception('The page you requested does not exist!');
		}
		require $file;
		if ( !class_exists( $url[ 0 ] ) ) {
			throw new Exception('There was a problem generating the requested page!');
		}
		$controller = new $url[ 0 ];
		$controller->loadModel( $url[ 0 ] );
		if ( isset( $url[ 1 ] ) ) {
			if ( !method_exists( $controller, $url[ 1 ] ) ) {
				throw new Exception('The method you requested is not available!');
			}
			$params = array_slice( $url, 2 );
			call_user_func_array( array(
				 $controller,
				$url[ 1 ] 
			), $params );
		} else {
			$controller->_default();
		}
	}
}
?>
