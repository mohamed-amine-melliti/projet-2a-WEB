<?PHP
class commande{
	private $idCmd;
	private $dateCmd;
	private $prixtot;
	private $date_prev;
	private $etatCmd;	
	function __construct($idCmd,$dateCmd,$prixtot,$date_prev,$etatCmd){
		$this->idCmd=$idCmd;
		$this->dateCmd=$dateCmd;
		$this->prixtot=$prixtot;
		$this->date_prev=$date_prev;
		$this->etatCmd=$etatCmd;
		
	}
	
	function getidCmd(){
		return $this->idCmd;
	}
	function getdateCmd(){
		return $this->dateCmd;
	}
	function getprixtot(){
		return $this->prixtot;
	}
	function getdate_prev(){
		return $this->date_prev;
	}
	function getetatCmd(){
		return $this->etatCmd;
	}

	function setdateCmd($dateCmd){
		$this->dateCmd=$dateCmd;
	}
	function setprixtot($prixtot){
		$this->prixtot=$prixtot;
	}
	function setdate_prev($date_prev){
		$this->date_prev=$date_prev;
	}
	function setetatCmd($etatCmd){
		$this->etatCmd=$etatCmd;
	}
	
}

?>