function controle_connexion() {
	// body...

	var username=connexion.username.value;
	var password = connexion.pwd.value;

	if(username.length ==0)
	{
		alert("Vous n'avez pas saisie votre nom d'utilisateur");
	}

	else if (password.length==0)
	{
	alert("Vous n'avez pas saisie votre mot de passe ");
	}

}