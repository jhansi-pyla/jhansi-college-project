<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leaveletter</title>
	<style>
		body{
			padding: 40px;
			background-color: white;
			margin: 0;
		}
		h1{
			text-align: center;
			font-size: 30px;
		}
		.div1{
			text-align: right;
		}
		.div2{
			text-align: left;
		}
		.div3{
			text-align: justify;
		}
		button{
			background-color: orange;
			border-radius: 20px;
			align-content: center;
			padding: 5px 10px;
		}
		</style>  																					    
</head>
<body>
  	<p style="font-family: caliber ">
  		<h1>Leave letter</h1>
  		<div class="div1">
  				Place: <?php echo $_POST["place"].","; ?><br>
  				Date:<?php echo  date("d/m/Y")."."?>
  		</div><br>
  		<div class="div2">
  			To<br>
  			<?php echo $_POST["To"]; ?>,<br>
  			<?php echo $_POST["organisation"] ?>,<br>
  			<?php echo $_POST["location"] ?>.<br>
  		</div><br>
  		 <p>Sub:Leave application for taking <?php echo $_POST["days"];?> leave.</p>
  		<div class="div3">
  			<p>Respected <?php echo $_POST["gender"]?>,</p>
  			     <p>&nbsp &nbsp &nbsp &nbsp &nbspMy name is <?php echo $_POST["name"];?>.I want to take leave <?php echo $_POST["days"];?> i.e., <?php echo $_POST["from"];?> and <?php echo $_POST["to"];?> because of <?php echo $_POST["Cause"];?>. </p>
  			     <p> &nbsp &nbsp &nbsp &nbsp I promise i'll complete all my works  further days in time. So,please grant me leave.</p>
  		</div>
  		<br>
  		<div>
  			<p style="text-align: center;">Thanking you <?php echo $_POST["gender"];?>,</p>
  		</div>
  		<div class="div1">
  			Yours Sincerely,<br>
  			<?php echo $_POST["name"]; ?>.
  		</div><br><br>
  <button onclick="window.print()">Print letter</button>
</body>
</html>