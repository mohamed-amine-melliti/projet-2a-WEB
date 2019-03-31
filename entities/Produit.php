<?PHP
class Produit{
	private $idproduit;
	private $nomproduit;
	private $description;
	private $prix;
	private $qt;
	private $image;
	private $categorie;

		
		function __construct($idproduit,$nomproduit,$description,$prix,$qt,$categorie,$image){
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->description=$description;
		$this->prix=$prix;
		$this->qt=$qt;
		$this->image=$image;
		$this->categorie=$categorie;

	}
	
	function getidproduit(){
		return $this->idproduit;
	}
	function getnomproduit(){
		return $this->nomproduit;
	}

	function getdescription(){
		return $this->description;
	}

	function getqt(){
		return $this->qt;
	}
	function getimage(){
		return $this->image;
	}

	function getprix(){
		return $this->prix;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}
	function setdescription($description){
		$this->description;
	}
	function setqt($qt){
		$this->qt=$qt;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	
}

?>