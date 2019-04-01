<?php
class Client 
{
	private $cin;
	private $username;
	private $password;
	private $nom;
	private $prenom;
	private $tel;
	private $email;
	private $adress;
	private $etat;
	private $date_desactivation;
	private $date_limite;
	
	 function __construct($cin,$username,$password,$nom,$prenom,$tel,$email,$adress,$etat,$date_desactivation,$date_limite)
	{
		$this->cin=$cin;
		$this->username=$username;
		$this->password=$password;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->email=$email;
		$this->adress=$adress;
		$this->etat=$etat;
		$this->date_desactivation=$date_desactivation;
		$this->date_limite=$date_limite;

	}



	function getCin(){
		return $this->cin;
	}
	function getUsername(){
		return $this->username;
	}
	function getPassword(){
		return $this->password;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}

	function getTel(){
		return $this->tel;
	}
	function getEmail(){
		return $this->email;
	}
	function getAdress(){
		return $this->adress;
	}
	function getEtat(){
		return $this->etat;
	}
	function getDate_desactivation(){
		return $this->date_desactivation;
	}
	function getDate_limite(){
		return $this->date_limite;
	}




/****************************/

	function setCin($cin){
		$this->cin=$cin;
	}
	function setUsername($username){
		$this->username=$username;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setPassword($password){
		$this->password=$password;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setAdress($adress){
		$this->adress=$adress;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setDate_desactivation($date_desactivation){
		$this->date_desactivation=$date_desactivation;
	}
	function setDate_limite($date_limite){
		$this->date_limite=$date_limite;
	}





















}

  ?>