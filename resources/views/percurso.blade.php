<!DOCTYPE html>
<html>
<head>
	<title>Informação do Percurso</title>
</head>
<body>
<h1>{{$percurso->name}}</h1>
<p>{{'Criador do percurso tem o id ' . $percurso->idEditor}}
<p>{{$percurso->descricao}}
</body>
</html>