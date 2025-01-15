<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things to do</title>
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="things_to_do_style.css">
</head>
<body>
<?php
	require('admin_check.php');

    $p_t_id = $_GET['p_t_id'];
    $sql2 = "SELECT * FROM place_type WHERE p_t_id='$p_t_id'";
    $sql_query2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_assoc($sql_query2)
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
            <b class="navbar-brand"><?php echo $row2['name']; ?></b>
        </div>
        <div class="upper_buttons">
            <a href="admin_landing.php" class="btn btn-primary">Back</a>
            <a href="logout_back.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
    <nav class="navbar">
        <div class="container-fluid justify-content-around">
            <div class="main">
                <form action="add_things_to_do_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Add <?php echo $row2['name']; ?></a>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="location_id" aria-label="Default select example">
                            <option value="0">--Select location--</option>
                            <?php
                                $sql = "SELECT * FROM locations ORDER BY name ASC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["location_id"] . ">" . $row["name"] . "</option>";
                                }
                            ?>
                        </select>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" aria-label="file example">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Web address</label>
                        <input type="text" name="web_address" class="form-control">
                    </div>
                    <?php echo "<input type='hidden' name='p_t_id' value=" . $p_t_id . ">";?>
                    <div class="button"><button class="btn btn-primary">Add</button></div>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully added!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==0) { ?>
			            <div class="message2"><?php echo "Error!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==2) { ?>
			            <div class="message2"><?php echo "Phone number is invalid!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['add_message']) && $_GET['add_message']==3) { ?>
			            <div class="message2"><?php echo "Please select a location!"; ?></div>
                    <?php } ?>
                </form>
            </div>
            <div class="main">
                <form action="update_things_to_do_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Update <?php echo $row2['name']; ?></a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="p_id" aria-label="Default select example">
                            <option value="0">--Select <?php echo $row2['name']; ?>--</option>
                            <?php
                                $sql = "SELECT * FROM place WHERE p_t_id='$p_t_id' ORDER BY p_name ASC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["p_id"] . ">" . $row["p_id"] . ". " . $row["p_name"] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="location_id" aria-label="Default select example">
                            <option value="0">--Select new location--</option>
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
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" aria-label="file example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Web address</label>
                        <input type="text" name="web_address" class="form-control">
                    </div>
                    <?php echo "<input type='hidden' name='p_t_id' value=" . $p_t_id . ">";?>
                    <div class="button"><button class="btn btn-primary">Update</button></div>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==0) { ?>
			            <div class="message2"><?php echo "Nothing Updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==2) { ?>
			            <div class="message2"><?php echo "Please select the " . $row2['name'] . ""; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==3) { ?>
			            <div class="message2"><?php echo "Phone number is invalid!"; ?></div>
                    <?php } ?>
                </form>
            </div>
            <div class="main">
                <form action="delete_service_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Delete <?php echo $row2['name']; ?></a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="p_id" aria-label="Default select example">
                            <option value=0>--Select <?php echo $row2['name']; ?>--</option>
                            <?php
                                $sql = "SELECT * FROM place WHERE p_t_id='$p_t_id' ORDER BY p_name ASC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["p_id"] . ">" . $row["p_name"] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <?php echo "<input type='hidden' name='p_t_id' value=" . $p_t_id . ">";?>
                    <div class="button"><button class="btn btn-primary">Delete</button></div>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully deleted!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==0) { ?>
			            <div class="message2"><?php echo "Error!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['delete_message']) && $_GET['delete_message']==2) { ?>
			            <div class="message2"><?php echo "Please select the " . $row2['name'] . ""; ?></div>
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
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Location</th>
                        <th scope="col">Web address</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM place JOIN locations ON place.location_id=locations.location_id WHERE p_t_id='$p_t_id'";
                            $sql_query = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($sql_query))
                            {
                                echo "<tr><td>" . $row["p_id"] . "</td>";
                                echo "<td class='text-center'><img src='Photos/Things_to_do/" . $row['image'] . "'  width='200px'></td>";
                                echo "<td>" . $row["p_name"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["web_address"] . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    
</body>
</html>