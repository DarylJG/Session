<?php 
	include "Session.php"; 
	$Session = new Session();
	$Session->init();
?>
Checking If init() call does start a session: 

<br><br>
Print_r($_SESSION); to follow: <br>

<?php

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>"; 
	// Results providing init() does not invoke a PHP Session: 
	
	// Changed a protected element to a public for testing purposes 
?>
<br><br>
Testing Status_Session(); method within OOP Scope <br><br>
<?php
	echo $Session->Status_Session();
	
?>
<br><br>
Testing Setting Of A Session, pre print_r /pre will follow showing the array: <br><br>

<?php
	$Session->Set("KeyName","Value");
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
?>
<br><br>

Testing Get method With Existing Key <br><br>

<?php 
	$Value = $Session->Get("KeyName");
	var_dump($Value);
?>
<br><br>
Testing Get Method With Non-existing Key <br><br>

<?php 
	$Value_Check = $Session->Get("NonExisting");
	var_dump($Value_Check);
?>
<br><br>
Testing Display: <br><br>
<pre>
<?php print_r($Session->Display()); ?>
</pre>
