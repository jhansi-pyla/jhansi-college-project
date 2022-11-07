<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.full-page
{
    height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://wallpaperboat.com/wp-content/uploads/2019/06/plain-black-09.jpg');
	background-position: center;
	background-size: cover;
	position: absolute;
}
.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}
#login-form

.form-box
{
    width:380px;
	height:480px;
	position:relative;
	margin:2% auto;
	background:rgba(0,0,0,0.3);
	padding:10px;
    overflow: hidden;
}
.button-box
{
	width:220px;
	margin:35px auto;
	position:relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}
.toggle-btn
{
	padding:10px 30px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline: none;
	position: relative;
	color: white;
}
#btn
{
	top: 0;
	left:0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: #F3C693;
	border-radius: 30px;
	transition: .5s;
}
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
.submit-btn
{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #F3C693;
	border: 0;
	outline: none;
	border-radius: 30px;
}
.check-box
{
	margin: 30px 10px 34px 0;
}
span
{
	color:#777;
	font-size:12px;
	bottom:68px;
	position:absolute;
}
#login
{
	left:50px;
}
#login input
{
	color:white;
	font-size:15;
}
#register
{
	left:450px;
}
#register input
{
	color:white;
	font-size: 15;
}


	</style>
</head>
<body>
	<?php
		require('db.php');
		if(isset($_POST['name'])){
			$name=$_POST["name"];
			$rollno=$_POST["rollno"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$passwordcon=$_POST["passwordcon"];
			$query="INSERT INTO `student` (name,rollno,email,password,passwordcon) VALUES('$name','rollno','$email','$password','$passwordcon')";
			$result=mysqli_query($conn,$query);
			if($result){
				echo "successfully";
			}
		}
		else{
		?>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.html'>Sjc</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='sjc.html'>Home</a></li>
                    <li><a href='login.html'>login</a></li>
                    <li><a href='secure.html'>Secure box</a></li>
                    <li><a href='dept.html'>faculty</a></li>
                  
                </ul>
            </nav>
        </div>
        <div>
         <h1 style="text-align: center;color: whitesmoke;">student login</h1>	
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>

                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
		    <input type='password'class='input-field'placeholder='Enter Password' required>
		    
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form action="" method="post" id='register' class='input-group-register'>
		     <input type='text' name="name" class='input-field'placeholder='First Name' required>
		     <input type='text' name="rollno" class='input-field'placeholder='Roll number ' required>
		     <input type='email' name="email" class='input-field'placeholder='Email Id' required>
		     <input type='password' name="password" class='input-field'placeholder='Enter Password' required>
		     <input type='password' name="passwordcon" class='input-field'placeholder='Confirm Password'  required>
		     
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
    <?php
    }
?>
</body>
</html>

</body>
</html>