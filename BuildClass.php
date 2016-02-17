<?php 

class BuildClass 
{
	/*
	 * Class Name.
	 */
	public $class_name;

	/*
	 * Access modifier used with the class.
	 */
	public $class_access_modifier = "public";

	public $extends_class = "CI_model";
	
	/*
	 * Path where our class will be built.
	 */
	public $save_path;

	public $vars = array('var1' => 'public', 'var2' => 'private', "AnotherVar" => 'protected');

	protected $PHP_open_tags = '<?php '; 

	public function __construct($class_name, $class_access_modifier = 'public') 
	{
		$this->class_access_modifier = $class_access_modifier; 
		$this->class_name = $class_name;

		$this->SaveFile(); 
	}


	public function BuildExtendsClass() 
	{
		if (!!$this->extends_class) {
			return "extends ". $this->extends_class;
		}
	}

	public function BuildVars() 
	{
		$string = null; 
		foreach($this->vars as $var => $var_access_mod) {
			$string .= "\n\t" .$var_access_mod . " $".$var."; \n";
		}

		return $string; 
	}

	public function GeneratePHPFile() 
	{
		// The weird formating is so the newly built class is properly formated.
		$PHP = $this->PHP_open_tags."

public ".$this->class_name." " .$this->BuildExtendsClass()."
{
".$this->BuildVars()."	
	public function __construct() 
	{

	}			
}

		";


		return $PHP; 
	}

	public function SaveFile()
	{
		file_put_contents($this->class_name .'.php', $this->GeneratePHPFile());
	}

}