
<?php  

include "db_conn.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<table class="table caption-top">
  <caption>Teams Stats</caption>
  <thead>


  <?php
      
     
            // read all row from database table
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);

  

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td> - </td>
                    <th>" . $row["TeamName"] . "</th>
                    <td> VS </td>
                    <th>" . $row["TeamNameB"] . "</th>
                   
                   
                </tr>";
            }


          
            ?>




      

 
  </thead>
  <tbody>


<?php
      
     
            // read all row from database table
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);

  

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td> - </td>
                    <td>" . $row["TeamScore"] . "</td>
                    <td>Team score </td>
                    <td>" . $row["TeamScoreB"] . "</td>
                    
                   
                   
                </tr>";
            }


          
            ?>

<?php
      
     
            // read all row from database table
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);



            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td> - </td>
                    <td>" . $row["Shots"] . "</td>
                    <td>Shots</td>
                    <td>" . $row["ShotsB"] . "</td>
                   
                   
                </tr>";
            }


          
            ?>


            
            <?php
      
     
            // read all row from database table
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);

  

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td> - </td>
                    <td>" . $row["TeamPossession"] . "</td>
                    <td>Team Possession </td>
                    <td>" . $row["TeamPossessionB"] . "</td>
                    
                   
                   
                </tr>";
            }


          
            ?>


<?php
      
     
      // read all row from database table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);



      // read data of each row
while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td> - </td>
              <td>" . $row["redCards"] . "</td>
              <td>Red Cards  </td>
              <td>" . $row["redCardsB"] . "</td>

             
             
          </tr>";
      }


    
      ?>
            


  </tbody>
</table>
</body>
</html>