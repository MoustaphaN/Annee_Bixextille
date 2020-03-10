<!doctype html>
<html>
<head>
</head>
<body>

	<label for="annee">
		indique une annee ici
		<input type="text"name="annee"id="annee">
		<input type="button" onclick="return Verifier()" Value="Voir">
	</label>
 
</body>
<script>
		function Verifier(){
		var annee=document.getElementById('annee').value;
		if(annee % 4 == 0){
		alert("cette annee est bisextile");
		}
		else{
		alert("cette annee n'est pas bisextile");
		};
		}
	</script>
</html>