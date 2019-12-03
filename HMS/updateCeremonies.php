<?php
/**
 * Created for ICS499
 */
?>


<?php $page_title = 'Update Ceremony'; ?>
<?php include('header.php'); ?>
<div class="container">

<?php
include_once 'db_configuration.php';

if (isset($_GET['name'])){

    $name = $_GET['name'];

    $sql = "SELECT * FROM ceremonies
            WHERE name = '$name'";

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
}//end if

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action="updateTheCeremony.php" method="POST">
    <br>
    <h3>Update Ceremony of : '.$row["name"].' </h3> <br>
    <div class="form-row">
    
	<div class="form-group col-md-4">
      <label for="id">Id</label>
      <input type="text" class="form-control" name="id" value="'.$row["id"].'"  maxlength="5" required>
    </div>
	
    <div class="form-group col-md-8">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="'.$row["name"].'"  maxlength="255" readonly>
    </div>
  </div>
  
    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Floor #">Floor #</label>
          <input type="text" class="form-control" name="Floor #" value="'.$row["Floor #"].'"  maxlength="255">
        </div>
        
        <div class="form-group col-md-4">
          <label for="Room #">Room #</label>
          <input type="text" class="form-control" name="Room #" value="'.$row["Room #"].'"  maxlength="255" >
        </div>
        
        <div class="form-group col-md-4">
          <label for="Occupied">Occupied</label>
          <input type="text" class="form-control" name="Occupied" value="'.$row["Occupied"].'"  maxlength="255">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Alert">Alert</label>
          <input type="text" class="form-control" name="Alert" value="'.$row["Alert"].'"  maxlength="255">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Status">Status</label>
          <input type="text" class="form-control" name="Status" value="'.$row["Status"].'"  maxlength="255">
        </div>
        
        
    </div>
    
    <div class="form-row">
        
        
        
        
        
    </div>
    
    <div class="form-row">
        
        
        
        
        
    </div>

    <div class="form-row">
        
        
    </div>
    
    <div class="form-row">
        
        
        
    </div>
    <br>
    <div class="text-left">
        <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Update Ceremony</button>
    </div>
    <br> <br>
    
    </form>';

    }//end while
}//end if
else {
    echo "0 results";
}//end else

?>

</div>


