<?php
/**
 * Created for ICS499
 */

include_once 'db_configuration.php';

if (isset($_POST['id'])){

    $update_id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $Floor = mysqli_real_escape_string($db, $_POST['Floor']);
    $Room = mysqli_real_escape_string($db, $_POST['Room']);
    $Occupied = mysqli_real_escape_string($db, $_POST['Occupied']);
    $Alert = mysqli_real_escape_string($db, $_POST['Alert']);
    $Status = mysqli_real_escape_string($db, $_POST['Status']);
    

    $result = $db->query("SELECT * FROM ceremonies WHERE name='$name'");

    if ( $result->num_rows == 0 ) {
        $sql = "INSERT INTO ceremonies(id, name,
                  Floor, Room, Occupied, Alert,
                 Status)
                   VALUES ('$update_id','$name','$Floor #','$Room #',
                   '$Occupied','$Alert','$Status')
                   ";

        mysqli_query($db, $sql);
        header('location: index.php?CeremonyCreated=Success');
    } else{
        header('location: createCeremonies.php?CeremonyCreated=Failed');
    }




}//end if
?>