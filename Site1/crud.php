
<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
	
	
    
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Team A</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="TeamName">TeamName</label>
		     <input type="text" 
		           class="form-control" 
		           id="TeamName" 
		           name="TeamName" 
		           value="<?php if(isset($_GET['TeamName']))
		                           echo($_GET['TeamName']); ?>" 
		           placeholder="Enter TeamName">
		   </div>
		  
		   <div class="form-group">
		     <label for="TeamLogo">TeamLogo</label>
		     <input type="text" 
		           class="form-control" 
		           id="TeamLogo" 
		           name="TeamLogo" 
		           value="<?php if(isset($_GET['TeamLogo']))
		                           echo($_GET['TeamLogo']); ?>" 
		           placeholder="Enter TeamLogo">
		   </div>
		   <div class="form-group">
		     <label for="TeamScore">TeamScore</label>
		     <input type="number" 
		           class="form-control" 
		           id="TeamScore" 
		           name="TeamScore" 
		           value="<?php if(isset($_GET['TeamScore']))
		                           echo($_GET['TeamScore']); ?>" 
		           placeholder="Enter TeamScore">
		   </div>
		   <div class="form-group">
		     <label for="TeamPossession">TeamPossession</label>
		     <input type="number" 
		           class="form-control" 
		           id="TeamPossession" 
		           name="TeamPossession" 
		           value="<?php if(isset($_GET['TeamPossession']))
		                           echo($_GET['TeamPossession']); ?>" 
		           placeholder="Enter TeamPossession">
		   </div>
		   <div class="form-group">
		     <label for="redCards">redCards</label>
		     <input type="number" 
		           class="form-control" 
		           id="redCards" 
		           name="redCards" 
		           value="<?php if(isset($_GET['redCards']))
		                           echo($_GET['redCards']); ?>" 
		           placeholder="redCards">
		   </div>
		   <div class="form-group">
		     <label for="Shots">Shots</label>
		     <input type="number" 
		           class="form-control" 
		           id="Shots" 
		           name="Shots" 
		           value="<?php if(isset($_GET['Shots']))
		                           echo($_GET['Shots']); ?>" 
		           placeholder="Enter Shots">

		   </div>



		   <h4 class="display-4 text-center">Team B</h4><hr><br>



		   <div class="form-group">
		     <label for="TeamNameB">TeamNameB</label>
		     <input type="text" 
		           class="form-control" 
		           id="TeamNameB" 
		           name="TeamNameB" 
		           value="<?php if(isset($_GET['TeamNameB']))
		                           echo($_GET['TeamNameB']); ?>" 
		           placeholder="Enter TeamNameB">
		   </div>
		  
		   <div class="form-group">
		     <label for="TeamLogoB">TeamLogoB</label>
		     <input type="text" 
		           class="form-control" 
		           id="TeamLogoB" 
		           name="TeamLogoB" 
		           value="<?php if(isset($_GET['TeamLogoB']))
		                           echo($_GET['TeamLogoB']); ?>" 
		           placeholder="Enter TeamLogoB">
		   </div>
		   <div class="form-group">
		     <label for="TeamScoreB">TeamScoreB</label>
		     <input type="number" 
		           class="form-control" 
		           id="TeamScoreB" 
		           name="TeamScoreB" 
		           value="<?php if(isset($_GET['TeamScoreB']))
		                           echo($_GET['TeamScoreB']); ?>" 
		           placeholder="Enter TeamScoreB">
		   </div>
		   <div class="form-group">
		     <label for="TeamPossessionB">TeamPossessionB</label>
		     <input type="number" 
		           class="form-control" 
		           id="TeamPossessionB" 
		           name="TeamPossessionB" 
		           value="<?php if(isset($_GET['TeamPossessionB']))
		                           echo($_GET['TeamPossessionB']); ?>" 
		           placeholder="Enter TeamPossessionB">
		   </div>
		   <div class="form-group">
		     <label for="redCardsB">redCardsB</label>
		     <input type="number" 
		           class="form-control" 
		           id="redCardsB" 
		           name="redCardsB" 
		           value="<?php if(isset($_GET['redCardsB']))
		                           echo($_GET['redCardsB']); ?>" 
		           placeholder="redCardsB">
		   </div>
		   <div class="form-group">
		     <label for="ShotsB">ShotsB</label>
		     <input type="number" 
		           class="form-control" 
		           id="ShotsB" 
		           name="ShotsB" 
		           value="<?php if(isset($_GET['ShotsB']))
		                           echo($_GET['ShotsB']); ?>" 
		           placeholder="Enter ShotsB">
		   </div>
		   

		   

		  

		   

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>

	</div>

 


	
		  

		   

		  
	</div>

	</div>
	</div>
	 </div>
	
</body>
</html>