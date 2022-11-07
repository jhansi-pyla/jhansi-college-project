<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student login</title>
	<style type="text/css">
		.right{
			text-align: right;
		}
		h1{
			text-align: center;
		}
		p{
			text-align: center;
		}
		.one{
			font-size: 20px;
		}
		button{
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<h1>student login</h1>
	
  <div>
 <?php echo $_POST["email"];?>,<br>
 <?php echo $_POST["password"];?>,<br>

  </div>
</body>
</html>