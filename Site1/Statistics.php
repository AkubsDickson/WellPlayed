

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
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/AFALogo-5.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

o
  <body data-home-page="Home.php" data-home-page-title="Home" class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-96f9"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1600" data-image-height="900">
          <img src="images/AFALogo-5.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3017"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-3017" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Statistics.php" style="padding: 10px 38px;">Statistics</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Fixtures.php" style="padding: 10px 38px;">Fixtures</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Statistics.php">Statistics</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Fixtures.php">Fixtures</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-2">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 38px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Statistics.php" style="padding: 10px 38px;">About Us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Statistics.php">About Us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

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

<div class="space">

</div>
  
   
  </body>
</html>