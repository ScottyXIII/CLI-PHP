<?php 

include("BuildClass.php"); 
	
$class = new BuildClass("ModelClass");

unset($argv[0]);

if (count($argv) == 0) {
	PrintHelp();
} else {
	foreach ($argv as $arg) {
		$class->class_name = $arg;
		echo $arg;
		echo "\n";	
	}

	$class->SaveFile();
} 



function PrintHelp()
{
	echo "This is unhelpfull help";
}

?>