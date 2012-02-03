<?php
	/*
	json_storage
	* 
	* Here is the basic idea.... 
	
	/hash 
		/add	[generates unique hash, creates storage area mapped to hash, returns hash]
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
	header("Content-type: text/javascript");
	echo "alert('here');"
?>
