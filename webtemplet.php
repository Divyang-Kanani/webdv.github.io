<!DOCTYPE html>

<html>
<head>
	<title>HomePage</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="icon" href="Logo.png" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		footer{left: 0;
   bottom: 0;
   padding-bottom: 100px;
   width: 100%;
   background-color: purple;
   color: white;
   text-align: center;
   padding-top: 100px;
   }
   input[type=text]{
   	width: 25%;
   	height: 25%;
   	transition: .3s;
   	border: 2px solid #aaa;
   	border-radius:  4px;
   	outline: none;
   	padding: 8px;
   	margin-top: 70px;
   	margin-left: 10px;
   	box-sizing: border-box;
   }
   input[type=text]:focus{
   	border-color: purple;
   	box-shadow:0 0 10px dodgerblue;

   }
   .inputWithIcon input[type=text]{
   	padding-left:  40px;
   }
   .inputWIthIcon{
   	position: relative;
   }
   .inputWithIcon i{
   	position: absolute;
   	left: 0;
   	top: 8px;
   	padding:  70px 22px;
   	color: #aaa;
   	transition: .3s;
   }
   .inputWithIcon input[type=text]:focus + i{
   	color: dodgerblue;
   }


   input[type=email]{
   	width: 25%;
   	height: 25%;
   	transition: .3s;
   	border: 2px solid #aaa;
   	border-radius:  4px;
   	outline: none;
   	padding: 8px;
   	margin-top: 30px;
   	margin-left: 10px;
   	box-sizing: border-box;
   }
   input[type=email]:focus{
   	border-color: purple;
   	box-shadow:0 0 10px dodgerblue;

   }
   .inputWithIcons input[type=email]{
   	padding-left:  40px;
   }
   .inputWIthIcons{
   	position: relative;
   }
   .inputWithIcons i{
   	position: absolute;
   	left: 0;
   	top: 8px;
   	padding:  137px 22px;
   	color: #aaa;
   	transition: .3s;
   }
   .inputWithIcons input[type=email]:focus + i{
   	color: dodgerblue;
   }
	</style>

</head>
<body>
	<header>
		<div class="main">
			
			<ul>
				<li class="active"><a href="webtemplet.php">Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a  href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="gallery.php">Gallery</a></li>

			</ul>
		</div>
<div class="inputWithIcon">
			<input type="text" name="user" placeholder="FullName" />
			<i  class='fas fa-user' aria-hidden="true"></i>
			</div>
			<div class="inputWithIcons">
			<input type="email" name="user" placeholder="E-mail" />
			<i  class='fa fa-envelope fa-lg fa-fw' aria-hidden="true"></i>
			</div>
			<div class="title">
				<h1>WEB DV</h1>
			</div>
			<div class="button">
				<a href="#" class="btn">Login</a>
				<a href="#" class="btn">Register</a>

			</div>
			
	</header>
	
	<footer>
		<div>  
			<p>Thanks</p>
			<p>Ahmedabad</p>
		</div>
	</footer>
</body>


</html>