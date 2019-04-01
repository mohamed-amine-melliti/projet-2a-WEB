function alphanumeric()
{ 

	var letters = /^[a-zA-Z]+$/;

	var cin = document.getElementById('cin').value;
	var nom = document.getElementById('nom').value;
	var prenom = document.getElementById('prenom').value;


	if( !isNaN(cin) )
	{
		if( nom.value.match(letters) )
		{
			if( prenom.value.match(letters) )
			{
				document.getElementById('form').submit();
			}
			else
			{
				alert('prenom ghalet');
			}
		}
		else
		{
			alert('nom ghalet');
		}
	}
	else
	{
		alert('cin ghalet');
	}
		
}