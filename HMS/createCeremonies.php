<?php
/**
 * Created for ICS499
 */
?>


<?php $page_title = 'Create Schedule'; ?>
<?php include('header.php'); ?>

<div class="container">
    <!--Check the CeremonyCreated and if Failed, display the error message-->
    <?php
    if(isset($_GET['CeremonyCreated'])){
        if($_GET["CeremonyCreated"] == "Failed"){
            echo '<br><h3 class="bg-danger">A schedule with the NAME already exists. Please try again with a new NAME! </h3>';
        }
    }

    ?>
    <form action="createTheCeremony.php" method="POST">
        <br>
        <h3>Create New Schedule: </h3> <br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="id">Id</label>
                <input type="text" class="form-control" name="id"   maxlength="5" required>
            </div>
            <div class="form-group col-md-8">
                <label for="name">Employee</label>
                <input type="text" class="form-control" name="name"  maxlength="64" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="Floor">Floor #</label>
                <input type="text" class="form-control" name="Floor #"   maxlength="20">
            </div>

            <div class="form-group col-md-4">
                <label for="Room">Room #</label>
                <input type="text" class="form-control" name="Room #" maxlength="30" >
            </div>

            <div class="form-group col-md-4">
                <label for="Occupied">Occupied</label>
                <input type="text" class="form-control" name="Occupied"  maxlength="30">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="Alert">Alert</label>
                <input type="text" class="form-control" name="Alert"  maxlength="255">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Status">Status</label>
                <input type="text" class="form-control" name="Status"   maxlength="128">
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
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create Schedule</button>
        </div>
        <br> <br>

    </form>
</div>

