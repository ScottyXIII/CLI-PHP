<?php 
include("PHPGrammer.php"); 

class BuildClass 
{
	/*
	 * PHP grammer.
	 */
	private $grammer;

	/*
	 * Path where our class will be built.
	 */
	public $save_path;

	public function __construct() 
	{	
		$this->grammer = new PHPGrammer();
	}

    public function __get($name) {
        if (property_exists($this->grammer , $name)) {
        	return $this->grammer->$name;
        } else {
        	echo "no property = ". $name;
        }
    }

    private function BuildStaticClass() 
	{
		if ($this->is_static) {
			return "static ";
		}
	}

	private function BuildExtendsClass() 
	{
		if (!!$this->extends_class) {
			return "extends ". $this->extends_class;
		}
	}

	private function BuildVars() 
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

".$this->BuildStaticClass()."class ".$this->class_name." " .$this->BuildExtendsClass()."
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