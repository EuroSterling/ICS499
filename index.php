<?php

/**
 * Created for ICS499
 */
require 'bin/functions.php';
require 'db_configuration.php';


$query = "SELECT * FROM ceremonies";

$GLOBALS['tableResults'] = mysqli_query($db, $query);
$GLOBALS['customerTableResults'] = mysqli_query($db, $query);
$GLOBALS['gridResults'] = mysqli_query($db, $query);


?>

<?php $page_title = 'Schedule Table'; ?>
<?php include('header.php'); ?>

<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="my-4">
        <?php
        //Display Admin view if an admin is logged in.
        //This gives full access to all CRUD functions
        if (isset($_SESSION['type'])){
            if ($_SESSION['type'] == 'Admin'){
                echo '<h2 class="text-center">Admin Mode </h2>';
                ?>
                <style type="text/css">#adminTableview{
                        display:block;
                    }
                </style>
                <style type="text/css">#customerTableView{
                        display:none;
                    }
                </style>
                <style type="text/css">#selector{
                        display:none;
                    }
                </style>
                <?php
            }//end if
        }//end if
        ?>
    </h1>
    <div id="adminTableView">
        <button><a class="btn btn-sm" href="createCeremonies.php">Create New Schedule</a></button>
        <table class="table table-striped" id="tableResults">
            <div class="table responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee</th>
                    <th>Floor #</th>
                    <th>Room #</th>
                    <th>Occupied</th>
                    <th>Alert</th>
                    <th>Status</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($tableResults->num_rows > 0) {
                    // output data of each row
                    while($row = $tableResults->fetch_assoc()) {
                        echo '<tr>
                            <td>'.$row["id"].'</td>
                            <td class="text"> <span>'.$row["name"].' </span> </td>
                                          <td> '.$row["Floor #"].'</td>
                                          <td> '.$row["Room #"]. '</td>
                                          <td> '.$row["Occupied"]. '</td>
                                          <td> '.$row["Alert"]. '</td>
                                          <td> '.$row["Status"]. '</td>   
                                          <td><a class="btn btn-primary btn-sm" href="viewCeremony.php?name='.$row["name"].'">View</a></td>     
                                          <td><a class="btn btn-warning btn-sm" href="updateCeremonies.php?name='.$row["name"].'">Update</a></td>                                  
                                          <td><a class="btn btn-danger btn-sm" href="deleteCeremony.php?name='.$row["name"].'">Delete</a></td>                                  
                                        </tr>';
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
                ?>
                </tbody>
            </div>
        </table>
    </div>

    <div id="customerTableView">
        <table class="table table-striped" id="ceremoniesTable">
            <div class="table responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Floor #</th>
                    <th>Room #</th>
                    <th>Occupied</th>
                    <th>Alert</th>
                    <th>Status</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
                if ($customerTableResults->num_rows > 0) {
                    // output data of each row
                    while($row = $customerTableResults->fetch_assoc()) {

                        echo '<tr>
                            <td>'.$row["id"].'</td>
                            <td class="text"> <span>'.$row["name"].' </span> </td>
                                          <td> '.$row["Floor #"].'</td>
                                          <td> '.$row["Room #"]. '</td>
                                          <td> '.$row["Occupied"]. '</td>
                                          <td> '.$row["Alert"]. '</td>
                                          <td> '.$row["Status"]. '</td>
                                                                               
                                        </tr>';
                    }//end while
                }//end if
                else {
                    echo "0 results";
                }//end else
                ?>
                </tbody>
            </div>
        </table>
    </div>
</div>

<!-- /.container -->
<!-- Footer -->
    <footer class="page-footer text-center">
        <p>Hotel Management System</p>
    </footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Data Table-->
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>


<script type="text/javascript" language="javascript">
    $(document).ready( function () {
        $('#tableResults').DataTable( {
            dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv' , 'pdf'
                ] }
        );

        $('#ceremoniesTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'csv', 'pdf'
            ] }
        );
    } );
</script>
</body>
</html>
