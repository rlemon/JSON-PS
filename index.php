<<<<<<< HEAD

heloo worls

=======
<?php
	/*
	json_storage
	* 
	* Here is the basic idea.... 
	
	/hash 
		/create	[generates unique hash, creates storage area mapped to hash, returns hash]
				* to reduce lag.. due to ipage sucking
				* I will have to store each peice of data in a seperate flat file.
			?callback [callback with data]
		/remove [removes hash from server, as well as JSON objects/flat file]
				* this will be tricky.. don't want people removing others data. 
	/<hash>
		/get [retreives JSON object and returns it to the callback]
			?callback [callback with data]
		/set [stores the values in the format below]
			?key=value [json=JSON]
			?callback [callback with message]
	 * */
	require('libs/Model.php');
	require('libs/View.php');
	require('libs/Controller.php');
	require('libs/Bootstrap.php');
	$app = new Bootstrap();
?>
>>>>>>> e2100d0f0c91e9932bf6b25a1f58e5447c780711
