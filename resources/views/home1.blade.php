<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>admin</p>
<form method="post" action="logout">
	{{ csrf_field() }}
	<button >deconnecter</button>
</form>
</body>
</html>