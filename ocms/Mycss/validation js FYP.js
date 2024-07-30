function name_chk()
{
	var name = document.getElementById("name");
	
	if(name < 5 || name >20)
		{
			document.getElementById("demo").innerHTML = "Paragraph changed!";
		}
	else
		{
			document.getElementById("demo").style.display = "none";
		}
}