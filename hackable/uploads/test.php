<?php
	$output = shell_exec('ls -lart');
	echo "<pre>$output</pre>";

	$cmd = 'set';
	echo "<pre>".shell_exec($cmd)."</pre>";

	$figlet = shell_exec('sudo apt-get install figlet');
	echo "<pre>$figlet</pre>";

	$hello = shell_exec('figlet Hello Terminal  Are we root ???');
	echo "<pre>$hello</pre>";
?>