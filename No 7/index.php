<?php 

$host 	= "localhost";
$user 	= "root";
$pass 	= "";
$db 	= "blogsaya";

$conn	= mysqli_connect($host,$user,$pass,$db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Avtara</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 450px}
    @media screen and (max-width: 767px) {
      .row.content {height:auto;} 
    }	
  </style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default is-primary">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="index.php">Avtara Blog</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>

	      </ul>
	    </div>
	  </div>
	</nav>
	  
	<div class="container">    
	<?php 
		if(isset($_GET['id_post'])) {
			$sql = "SELECT `posts`.`id_posts`, `posts`.`title`, `posts`.`content`, `posts`.`createdBy`, `users`.`id_user`, `users`.`username` FROM `posts` LEFT JOIN `users` ON `posts`.`createdBy`=`users`.`id_user` WHERE `id_posts`='".$_GET['id_post']."' ";
			$run = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($run) > 0) {
				    ?>
				    <div class="row content">

				<?php while($row = mysqli_fetch_assoc($run)) {
				       ?>
				       
					    <div class="col-sm-12 text-left"> 
					      <h1><?php echo strtoupper($row['title']); ?></h1><hr>
					      <p><?php echo $row['content']; ?></p>
					      <br>
							<small style="float:right">Author : <b><?php echo $row['username']; ?></b></small>
					      <hr>
					    </div>
					    
				<?php } ?>
				
				<br><br><br>
				    <div class="col-sm-12 text-left">
				    	<div class="form-group">
						  <form method="POST">
							  <label for="comment">Komentar :</label>
							  <textarea class="form-control" name="komentar" rows="5" id="comment"></textarea>
							  <br>
							  <input type="submit" name="komentari" value="Komentari" class="btn btn-primary">
							  <?php 
							  	if (isset($_POST['komentari'])){
							  		$sql2 = "INSERT INTO comments(`id_comments`, `comment`, `postId`) VALUES(NULL, '".$_POST['komentar']."', '".$_GET['id_post']."')";
								    $run2 = mysqli_query($conn, $sql2);
								    if ($run2) {
								    	
								    }else{
								    	echo "<script>alert('Gagal Mengomentari')</script>";
								    }
							  	}
							  ?>
						  </form>
						  <br><br><br><br>
						  <div class="well" style="background: #ffffff">
							  	<?php 
							  		$sql1 = "SELECT count('postId') as 'tot' FROM `comments` WHERE `postId`=".$_GET['id_post']."";
								    $run1 = mysqli_query($conn, $sql1);
								    $row1 = mysqli_fetch_assoc($run1);
								    if ($run1) {
								    	echo $row1['tot']." Komentar<br>";
								    }else{
								    	echo "0 Komentar<br>";
								    }
					  			?>
							  	<div class="media">
								    <?php 
								    $sql0 = "SELECT * FROM `comments` WHERE `postId`='".$_GET['id_post']."' ";
								    $run0 = mysqli_query($conn, $sql0);

								    if (mysqli_num_rows($run0) > 0) {
								    	while($row0 = mysqli_fetch_assoc($run0)){
								    	?>
								    		<div class="media-left media-top">
										      <img src="img/download.jpg" class="media-object" style="width:80px">
										    </div>
										    <div class="media-body">
										      <h4 class="media-heading">User</h4>
										      <p><?php echo $row0['comment']; ?></p>   
										    </div>
										    <hr>
								    	<?php	
								    	}
								    }else{
								    	echo "Belum ada komentar.";
								    }
								    ?>
							  </div>
							 </div>
						</div>
				    </div>
				  </div>				
			<?php
			} else {
			    echo "<h1>404 Not Found!! </h1>";
			}
		}else{
				$sql = "SELECT `posts`.`id_posts`, `posts`.`title`, `posts`.`content`, `posts`.`createdBy`, `users`.`id_user`, `users`.`username` FROM `posts` LEFT JOIN `users` ON `posts`.`createdBy`=`users`.`id_user`";
				$run = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($run) > 0) {
				    while($row = mysqli_fetch_assoc($run)) {
				       ?>
				       <br>
				       <h1><?php echo strtoupper($row['title']); ?></h1>
				       <p><?php echo substr($row['content'],0,250)."..."; ?></p>
				       <a class="btn-link" href="index.php?id_post=<?php echo $row['id_posts']; ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>   Baca Selengkapnya</button></a>
							 <hr>
							 
				       
				       <?php 
				    }
				} else {
				    echo "0 results";
				}	
		}
	?>
		</div>
</body>
</html>
