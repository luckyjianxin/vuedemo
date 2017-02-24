<!DOCTYPE html>
<html>
<head>
	<title>Users</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script type="text/javascript">
		window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token() ]); ?>	
	</script>
</head>
<body>
	<div id="app">
		<users></users>
	</div>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>