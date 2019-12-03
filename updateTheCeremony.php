<?php
/**
 * Created for ics499
 */

include_once 'db_configuration.php';

if (isset($_POST['name'])){

    $update_id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $Floor  = mysqli_real_escape_string($db, $_POST['Floor']);
    $Room = mysqli_real_escape_string($db, $_POST['Room']);
	$Occupied = mysqli_real_escape_string($db, $_POST['Occupied']);
    $Alert = mysqli_real_escape_string($db, $_POST['Alert']);
    $Status = mysqli_real_escape_string($db, $_POST['Status']);
    



    $sql = "UPDATE ceremonies
        SET id = '$update_id',
            name = '$name',
            Floor = '$Floor',
            Room = '$Room',
            Occupied = '$Occupied',
            Alert = '$Alert',
            Status = '$Status',
            
            
          WHERE name = '$name'";

    mysqli_query($db, $sql);
    header('location: index.php?BookUpdated=Success');
}//end if
?>

