<?php

class reclamation
{

public  $username;
private $sujet;
private $message;
private $etat ;
private $reponse;
public  $email;
public  $vu;

function __construct($username,$email,$sujet,$message,$etat,$vu,$reponse)
{
 $this->username=$username;
 $this->sujet=$sujet;
 $this->message=$message;
 $this->etat=$etat;
 $this->reponse=$reponse;
 $this->email=$email;
 $this->vu=$vu;
}

	function getUsername(){
		return $this->username;
	}
	function getSujet(){
		return $this->sujet;
	}
	function getMessage(){
		return $this->message;
	}
	function getEtat(){
		return $this->etat;
	}
	function getReponse (){
		return $this->reponse ;
	}





/****************************/

	function setUsername($username){
		$this->username=$username;
	}
	function setSujet($sujet){
		$this->sujet=$sujet;
	}
	function setMessage($message){
		$this->message=$message;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setReponse ($reponse ){
		$this->reponse=$reponse;
	}
	














}

  ?>