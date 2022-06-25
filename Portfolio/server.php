<!DOCTYPE html>
<html>
<head>
<title>AdminPanel</title>

<style type="text/css">
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 }

header{
  height: 10vh;
  text-align: center;
  line-height: 10vh;
  background-color:#F1E1A6;
  color:#534340;
  font-family: sans-serif;
}

body {
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  background-color:#97DBAE ;
  	}

.container {
  height:80vh;
  max-width: 140vh;
  width: 100%;
  margin: 0 auto;
  position: relative;
  color: #777;
  background: #FDF6EC;
  padding: 20px;
       }

#contact {
  text-align: center;
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
   }

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

form{
	display: block;
}

fieldset {
  border: 2 solid black;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
  display: block;
}

#tittle{
	margin-left: 4vh;
}

#skip{
	margin-left: 15vh;
}

button{
  cursor: pointer;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

footer{
	height: 20vh;
	text-align: center;
	line-height: 10vh;
	font-family: sans-serif;
	background-color:#F1E1A6;
	color: #534340;
}
	</style>

</head>

<body>
	
	<header>
   				<h1 class="heading">Welcome to Server Side technology. </h1>
	</header>

	<div class="container">
	<?php
	 $picture = $description =$title = $welcome = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$picture = test_input($POST["picture"]);
		$description = test_input($POST["description"]);
		$title = test_input($POST["title"]);
		$welcome = test_input($POST["welcome"]);
		
		
}	
	 function test_input($data){
	 	$data = trim($data);
	 	$data = stripslashes($data);
	 	$data = htmlspecialchars($data);
	 	return $data; 
	 }
	 ?>

<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["userImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) { // checks if the file is really an image
$check = getimagesize($_FILES["userImage"]["tmp_name"]);
if($check !== false) {
echo "This file is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "This file is not an image.";
$uploadOk = 0;
}
}

?>	
	 

	 	

<form id="contact" method="post" action="index.php" >
	 	<h3>Information Contact Form</h3>
	 	<h4>Contact Us anytime feel free</h4>
	 		<fieldset>
	 			<label>Description :</label>
	 				<input type="type" name="description" required><br>

	 			<label id="skip">Picture :</label>
	 			<input type="file" name="picture" required><br>

				<label id ="tittle">Title :</label>
	 				<input type="type" name="title" required><br>

	 			<label>Welcome :</label>
	 				<input type="type" name="welcome" required><br>

	 		
	 			<button type="submit" name="submit">Submit !</button>
	 		</fieldset>
</form>

	 	<?php
	 	
	 	echo $title . "<br>";
	 	echo $welcome . "<br>";
	 	echo $pictutre . "<br>";
	 	echo $description . "<br>";
	 	?>
	 </div>

<Footer>
	 	<h4>For more information contact me at Komalsidhu@gmail.com</h4>
</Footer>

</body>
</html>