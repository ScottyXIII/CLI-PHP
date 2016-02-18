<?php 

include("BuildModel.php"); 
	
$class = new BuildModel();

unset($argv[0]);

if (count($argv) == 0) {
	PrintHelp();
} else {
	$class->class_name = $argv[1];
	foreach ($argv as $arg) {

		if (preg_match("/([-v])\w/", $arg, $r)) {
			
		}

		
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