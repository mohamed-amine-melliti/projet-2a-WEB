 <?PHP
class offre{
	private $codepromo;
	private $descripition;
	private $datedebut;
	private $datefin;
	private $pourcentage;
	private $image;
	function __construct($codepromo,$descripition,$datedebut,$pourcentage,$datefin){
		$this->codepromo=$codepromo;
		$this->descripition=$descripition;
		$this->datedebut=$datedebut;
		$this->datefin=$datefin;
		$this->pourcentage=$pourcentage;
		

	}
	
	function getcodepromo(){
		return $this->codepromo;
	}
	function getdescripition(){
		return $this->descripition;
	}
	function getdatedebut(){
		return $this->datedebut;
	}
	function getpourcentage(){
		return $this->pourcentage;
	}
	function getdatefin(){
		return $this->datefin;
	}
	function getimage(){
		return $this->image;
	}
	function setdescripition($descripition){
		$this->descripition=$descripition;
	}
	function setdatedebut($datedebut){
		$this->datedebut;
	}
	function setpourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function setdatefin($datefin){
		$this->datefin=$datefin;
	}
	
}

?>