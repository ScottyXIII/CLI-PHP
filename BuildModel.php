<?php 

include("BuildClass.php"); 

class BuildModel extends BuildClass
{

	/*
	 * BuildClass Instance.
	 */
	private $class_builder;

	public function __construct() 
	{	
		parent::__construct();
		$this->classBuilder = new BuildClass(); 

		$this->extends_class = "CI_Model";
	}		

}

		