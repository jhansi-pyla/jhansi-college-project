<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>leave letter</title>
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
	<h1>Leave Letter</h1>
	<div class="one">
	<div class="right">
  <?php echo $_POST["station"];?>,<br>
  <?php echo date("d/m/Y");?>.
  </div>
  <div>To<br>
 <?php echo $_POST["whom"];?>,<br>
 <?php echo $_POST["college"];?>,<br>
 <?php echo $_POST["place"];?>,<br>
 <?php echo $_POST["station"];?>.<br>
 Sub:leave application for<?php echo $_POST["days"];?>days.<br>
 Respected<?php echo $_POST["gender"];?>,<br>
  </div>
  <div class="one">
  	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am <?php echo $_POST["name"];?> of <?php echo $_POST["group"];?>. My RollNo is<?php echo $_POST["roll"];?>. I am unable to attend the classes because I am   <?php echo $_POST["reason"];?>. So,I request you to please grant me leave for<?php echo $_POST["days"];?> days,from<?php echo $_POST["from"];?> to<?php echo $_POST["todate"];?>.  
  </div>
  <p>Thanking You.</p>
  <div class="right">
  Yours Obediently,<br>
    <?php echo $_POST["name"];?> 
    </div>    
</div>
<button onclick="window.print()">Print</button><br>
</body>
</html>