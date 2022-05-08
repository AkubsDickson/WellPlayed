<?php

include "db_config.php";

$week = $T1name = $T2name = $T3name = '';
$errors = array('week', 'T1name', 'T2name', 'T3name');

if(isset($_GET['submit'])){
    echo $_POST['T1name'];
    echo $_POST['T2name'];
    echo $_POST['T3name'];


    //Check T1name
    if(empty($_POST['week'])){
        $errors['week']='Enter the game week <br />';
    }else {
        $week = $_POST['week'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $week)){
            $errors['week']= 'Team name must be letters and spaces only';
        }
    }

    if(empty($_POST['T1name'])){
        $errors['T1name']= 'Enter the first team <br />';
    }else {
        $T1name = $_POST['T1name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T1name)){
            $errors['T1name']='Team name must be letters and spaces only';
        }
    }

     //Check T2name
     if(empty($_POST['T2name'])){
        $errors['T2name']='Enter the second team <br />';
    }else {
        $T2name = $_POST['T2name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T2name)){
            $errors['T2name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T3name
     if(empty($_POST['T3name'])){
        $errors['T3name']= 'Enter the third team <br />';
    }else {
        $T3name = $_POST['T3name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T3name)){
            $errors['T3name']= 'Team name must be letters and spaces only';
        }
    }

    if(array_filter($errors)){

    } else{

        $week = mysqli_real_escape_string($conn, $_POST['week']);
        $T1name = mysqli_real_escape_string($conn, $_POST['T1name']);
        $T2name = mysqli_real_escape_string($conn, $_POST['T2name']);
        $T3name = mysqli_real_escape_string($conn, $_POST['T3name']);

        //create sql
        $sql = "INSERT INTO fixtures(week,T1name,T2name,T3name) VALUES('$week','$T2name', '$T3name')";

        if(mysqli_query($conn,$sql)){
            //success
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
        header('Location: add.php');
    }

}


?>

<!DOCTYPE html>
<html>

    <section class="container ">

    <?php include "db_config.php";

            if($_POST['submit']){
                $week = $_POST['week'];
                $T1name = $_POST['T1name'];
                $T2name = $_POST['T2name'];
                $T3name = $_POST['T3name'];
                            
            }        

            $data = "INSERT INTO fixtures (`week`, `T1name`, `T2name`, `T3name`)VALUES ('$week', '$T1name', '$T2name', '$T3name')";        

            mysqli_query($conn,$data);

            ?>


        <h4>Add teams</h4>
        <form class="white" action="fixtures.php " method="POST" style="max-width: width 400px; margin: 20px auto;padding:20px">
            <label>Week</label>
            <input type="text" name="week" value ="<?php echo $week?>">
            <div class="red-text"></div>

            <label>First Team</label>
            <input type="text" name="T1name"  value ="<?php echo $T1name?>">
            <div class="red-text"></div>

            <label>Second Team</label>
            <input type="text" name="T2name"  value ="<?php echo $T2name?>">
            <div class="red-text"></div>

            <label>Third Team</label>
            <input type="text" name="T3name"  value ="<?php echo $T3name?>">
            <div class="red-text"></div>

            <div>
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>

    </section>

</html>