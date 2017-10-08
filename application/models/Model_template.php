<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_template extends CI_Model {

	public $id;
	public $item;
	
	public function __construct() {
		parent::__construct();
		//own construct code;
	}
	
	public function load($id = 0){
		
		$this->id = $id;
		$this->item = (object) [
			'id' => $id,
			'name' => "user_$id",
		];

		return $this;
	}

	public function get_name(){

		if(!$this->item) return FALSE;
		return $this->item->name;
	}

	public function set_name($name){
		if(!$this->item) return FALSE;
		$this->item->name = $name;
	}
}