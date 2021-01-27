<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<h1></h1>
<table border=1>
	@foreach($secraitaires as $secraitaire)
	<tr>
		<td>{{$secraitaire->id}}</td>
		<td>{{$secraitaire->Nom_sec}}</td>
		<td>{{$secraitaire->Prenom_sec}}</td>
		<td>{{$secraitaire->motdepasse_sec}}</td>
		<td>{{$secraitaire->email_sec}}</td>
	</tr>
	@endforeach
</table>



</body>
</html>