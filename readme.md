### SlayerSolutions Session Manipulations:



I'd like to thank [David Carr](https://raw.github.com/daveismyname/), For providing a base structure which this was developed on.


-----------------------



### Basic Information 

The entire package revolving around the $_SESSION Super Global is created with the ability to migrate to Websites which has already invoked the Session hook with no prior structure changes!
	


### Initializing the session:

The construct function manipulates the internal pointer within this class, if a session has already been invoked, without calling a new session_start(); the internal pointer will be set to true.
If a session has not already been invoked, then the construct will keep the internal pointer to false.

The following is a demonstration on how to invoke the session global from the class:
			  
	          $Session = new SlayerSolutions\Session();
	          $Session->init(); // A session hook will now be started


### Getting the Session Status:
This function will return a human readable line of text with the current state of the session:

 	        $Session = new SlayerSolutions\Session();
			echo $Session->Status_Session(); 
			/*
				Sampled Output: 
					Session Disabled
			*/
	        

### Adding a key/value to the Session Array: 
	        $Session = new SlayerSolutions\Session();
			$Session->init();
			$Session->Set("Key","Value);
			
	// Validating if a sucessfull entry has been made: 
	
			if ($Session->Set("Key","Value")){
				echo "Returned True";
			}
### Pulling a single key from the Session Array:

			$Session = new SlayerSolutions\Session();
			$Session->init();
			$Session->Set("ThisIsAKey","Value");
			echo $Session->Get("ThisIsAKey"); // Echo of "Value"
			
	// Other methods: 
	
			$Value = $Session->Get("ThisIsAKey");
			if ($Value !== false){
				echo $Value; // Echo of "Value"
			} // Will return a boolean false if the key is undetected

			
### Using Session_Dataseek: 

			$Session = new SlayerSolutions\Session();
			$Session->init();
				$Session->Set(
				  "TestValue", // First argument set here
				  array(
				  "0" => array (1,2,3,4,5),
				  "1" => array(3,4,5,6,7,8,9,6,5,4)
				) // Setting the value, with a multidimensional array
				);
				echo $Session->Session_Dataseek("TestValue",1,0); // Output of 3
				
				
Calling this function differs majorly from $Session->Get, this function enables you to seek through the entire array to return a single value if said key exists, else the function will returna boolean false, to give an indication that something went wrong. 

