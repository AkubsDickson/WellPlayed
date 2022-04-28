<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$TeamName = validate($_POST['TeamName']);
	$TeamLogo = validate($_POST['TeamLogo']);
	$TeamScore= validate($_POST['TeamScore']);
	$TeamPossession = validate($_POST['TeamPossession']);
	$redCards = validate($_POST['redCards']);
	$Shots = validate($_POST['Shots']);
	$TeamNameB = validate($_POST['TeamNameB']);
	$TeamLogoB = validate($_POST['TeamLogoB']);
	$TeamScoreB= validate($_POST['TeamScoreB']);
	$TeamPossessionB = validate($_POST['TeamPossessionB']);
	$redCardsB = validate($_POST['redCardsB']);
	$ShotsB = validate($_POST['ShotsB']);

	$user_data = 'TeamName='.$TeamName. 'TeamLogo='.$TeamLogo. 'TeamScore='.$TeamScore. 'TeamPossession='.$TeamPossession. 'redCards='.$redCards. '&Shots='.$Shots.  'TeamNameB='.$TeamNameB. 'TeamLogoB='.$TeamLogoB. 'TeamScoreB='.$TeamScoreB. 'TeamPossessionB='.$TeamPossessionB. 'redCardsB='.$redCardsB. '&ShotsB='.$ShotsB;

	

       $sql = "INSERT INTO users(TeamName, TeamLogo,TeamScore,TeamPossession,redCards,Shots,TeamNameB, TeamLogoB,TeamScoreB,TeamPossessionB,redCardsB,ShotsB) 
               VALUES('$TeamName', '$TeamLogo', '$TeamScore','$TeamPossession','$redCards','$Shots','$TeamName', '$TeamLogoB', '$TeamScoreB','$TeamPossessionB','$redCardsB','$ShotsB')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	

}