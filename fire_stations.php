<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire staions</title>
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="emergeicies_style.css">
</head>
<body>
<?php
	require('connect.php');
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>  
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        })
    </script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="logo">
            <img src="Photos/Self/logo.png" class="navbar-brand" height="80px">
            <b class="navbar-brand">Fire Stations</b>
        </div>
        <div class="upper_buttons">
            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="logout_back.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
    
        <div class="container-fluid justify-content-around">
                <table id="example" class="table table-hover table-bordered table-striped">
                    <thead>
                      <tr>
                      <th scope="col">Name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Web address</th>
                        <th scope="col">Location</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM place JOIN locations ON place.location_id=locations.location_id WHERE p_t_id='2'";
                            $sql_query = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($sql_query))
                            {
                                echo "<tr><td>" . $row["p_name"] . "</td>";
                                echo "<td>" . $row["phone_number"] . "</td>";
                                echo "<td>" . $row["web_address"] . "</td>";
                                echo "<td>" . $row["name"] . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    
</body>
</html>