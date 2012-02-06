#JSON Public Storage

##Service to store and retreive data via JSONP
###For cross-domain data storage.

    /hash 
  		/create	[generates unique hash, creates storage area mapped to hash, returns <hash>]
  				* to reduce lag.. due to ipage sucking
  				* I will have to store each peice of data in a seperate flat file.
  			/optional_callback [callback with data]

  		/get [retreives JSON object and returns it to the callback]
  			/<hash>/optional_callback [callback with data]
  		/set [stores the values in the format below]
  			/<hash>/optional_callback?data=json
