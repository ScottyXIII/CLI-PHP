<?php 

class PHPGrammer {
	
	/*
	 * PHP tags.
	 */
	public $PHP_open_tags = "<?php"; 

		/*
	 * PHP tags.
	 */
	public $PHP_close_tags = '?>'; 

	/*
	 * Class Name.
	 */
	public $class_name;

	/*
	 * Is class Static.
	 */
	public $is_static;

	/*
	 * Inherited Base class.
	 */
	public $extends_class;

	/*
	 * Class variables.
	 */
	public $vars = array();


	public function __construct()
	{
	
	}

}