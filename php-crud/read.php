<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">TeamName</th>
			      <th scope="col">	TeamLogo</th>
				  <th scope="col">	TeamScore</th>
			      <th scope="col">TeamPossession	</th>
				  <th scope="col">	redCards</th>
			      <th scope="col">Shots</th>
				  <th scope="col">TeamNameB</th>
			      <th scope="col">	TeamLogoB</th>
				  <th scope="col">	TeamScoreB</th>
			      <th scope="col">TeamPossessionB	</th>
				  <th scope="col">	redCardsB</th>
			      <th scope="col">ShotsB</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['TeamName']?></td>
				  <td><?php echo $rows['TeamName']; ?></td>
				  <td><?php echo $rows['TeamLogo']; ?></td>
				  <td><?php echo $rows['TeamScore']; ?></td>
				  <td><?php echo $rows['TeamPossession']; ?></td>
			      <td><?php echo $rows['redCards']; ?></td>
				  <td><?php echo $rows['Shots']; ?></td>
				  <td><?php echo $rows['TeamNameB']; ?></td>
				  <td><?php echo $rows['TeamLogoB']; ?></td>
				  <td><?php echo $rows['TeamScoreB']; ?></td>
				  <td><?php echo $rows['TeamPossessionB']; ?></td>
			      <td><?php echo $rows['redCardsB']; ?></td>
				  <td><?php echo $rows['ShotsB']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>
</html>