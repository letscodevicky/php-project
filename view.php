
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./video/styl.css">

	<title>View</title>
	<style>
		body {
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		video {
			width: 640px;
			height: 360px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="welcome.php">UPLOAD</a>

	<div class="alb">
		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <video src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
























	<body oncontextmenu="return false">
    <div class="container">
        <h1>Html And CSS Video Gallery</h1>
        <div id="video_player">
            <video controls poster="" class="video" id="video">
                <source src="uploads/<?=$video['video_url']?>" type="video/mp4">
                <source src="uploads/<?=$video['video_url']?>" type="video/mp4">
            </video>
            <div class="scrollBox">
                <div class="box">
                    <img src="./img/1.png">
                    <div class="box-content">
                        <h3>How to create a video Gallery using Html and CSS3</h3>
                        <a href="uploads/<?=$video['video_url']?>" class="btn">Watch</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ###########################javascript for vidoe Player################ -->

   /
</body>
</html>                











