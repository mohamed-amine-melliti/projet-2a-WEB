<?PHP
class cat{

	private $id;
	private $cat;
	function __construct($id,$cat){

		$this->id=$id;
		$this->cat=$cat;
	
	}
	

	function getid(){
		return $this->id;
	}
	function getcat(){
		return $this->cat;
	}


	function setid($id){
		$this->id=$id;
	}
	function setsolde($cat){
		$this->cat;
	}

	
}

?>