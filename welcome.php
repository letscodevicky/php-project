<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
 
    	
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	<div class = "video">
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file" class="file"
	 	       name="my_video">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload"
				class="file">
	 </form>
	</div>
	<div class="btns">
	<button class="logout" onclick ="window.location.href='logout.php';">
     Logout</button>
  
 </div>
 <button  class= "vidbtn" onclick ="window.location.href='view.php';">
     Videos</button>
</body>
</html>