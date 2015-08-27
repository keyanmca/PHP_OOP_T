<?php
/*
 * layout.php
 *
 * Used to the layout, for printing and adjusting
 * Mosaab © 2015
*/


class Layout {
	protected $input = "Hello world is the most boring example xD.";
	
	public $firstvar = "This is a public property";
	protected $secondvar = "This is a protected property";
	private $thirdvar = "This is a private property";
	
	// We will set a default value for it, so we can test something
	
	//       ▼ Important, also, no public, private, protected
	function __construct($value) {
		$this->input = $value;
	}
	
	public function get_input() {
		return $this->input;
	}
}

class LayoutTweeks extends Layout {
	public function set_input($value) {
		$this->input = $value;
		return $this->input;
	}
	
	public function get_protected() {
		return $this->secondvar;
	}
}

?>