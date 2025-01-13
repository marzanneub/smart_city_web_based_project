<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations</title>
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="locations_style.css">
</head>
<body>
<?php
	require('admin_check.php');
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
            <b class="navbar-brand">Locations</b>
        </div>
        <div class="upper_buttons">
            <a href="admin_landing.php" class="btn btn-primary">Back</a>
            <a href="logout_back.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
    <nav class="navbar">
        <div class="container-fluid justify-content-around">
            <div class="main">
                <form action="add_location_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Add Location</a>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required="">
                    </div>
                    <div class="button"><button class="btn btn-primary">Add</button></div>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully added!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==0) { ?>
			            <div class="message2"><?php echo "Error!"; ?></div>
                    <?php } ?>
                </form>
            </div>
            <div class="main">
                <form action="update_location_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Update Location</a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="location_id" aria-label="Default select example">
                            <option value="0">--Select name--</option>
                            <?php
                                $sql = "SELECT * FROM locations ORDER BY name ASC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["location_id"] . ">" . $row["name"] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="button"><button class="btn btn-primary">Update</button></div>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==0) { ?>
			            <div class="message2"><?php echo "Nothing Updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==2) { ?>
			            <div class="message2"><?php echo "Please select a location!"; ?></div>
                    <?php } ?>
                </form>
            </div>
            <div class="main">
                <form action="delete_location_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Delete Location</a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="location_id" aria-label="Default select example">
                            <option value=0>--Select name--</option>
                            <?php
                                $sql = "SELECT * FROM locations ORDER BY name ASC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["location_id"] . ">" . $row["name"] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="button"><button class="btn btn-primary">Delete</button></div>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully deleted!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==0) { ?>
			            <div class="message2"><?php echo "Error!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==2) { ?>
			            <div class="message2"><?php echo "Please select a location!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==3) { ?>
			            <div class="message2"><?php echo "This location cannot be deleted bacause of some places!"; ?></div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
        <div class="container-fluid justify-content-around">
            <table id="example" class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM locations ORDER BY location_id ASC";
                        $sql_query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($sql_query))
                        {
                            echo "<tr><td>" . $row["location_id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    
</body>
</html>