<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiatives</title>
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="initiatives_style.css">
</head>
<body>
<?php
	require('admin_check.php');
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="logo">
            <img src="Photos/Self/logo.png" class="navbar-brand" height="80px">
            <b class="navbar-brand">Initiatives</b>
        </div>
        <div class="upper_buttons">
            <a href="admin_landing.php" class="btn btn-primary">Back</a>
            <a href="logout_back.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
    <nav class="navbar">
        <div class="container-fluid justify-content-around">
            <div class="main">
                <form action="add_initiative_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Add Initiative</a>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" aria-label="file example" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" required=""></textarea>
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
                <form action="update_initiative_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Update Initiative</a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="init_id" aria-label="Default select example">
                            <option value="0">--Select title--</option>
                            <?php
                                $sql = "SELECT * FROM initiative ORDER BY init_id DESC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["init_id"] . ">" . $row["title"] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" aria-label="file example">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="button"><button class="btn btn-primary">Update</button></div>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==1) { ?>
			            <div class="message1"><?php echo "Successfully updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==0) { ?>
			            <div class="message2"><?php echo "Nothing Updated!"; ?></div>
                    <?php } ?>
                    <?php if(isset($_GET['update_message']) && $_GET['update_message']==2) { ?>
			            <div class="message2"><?php echo "Please select a title!"; ?></div>
                    <?php } ?>
                </form>
            </div>
            <div class="main">
                <form action="delete_initiative_back.php" method="POST" class="form">
                    <div class="mb-3">
                        <a class="navbar-brand">Delete Initiative</a>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="init_id" aria-label="Default select example">
                            <option value=0>--Select title--</option>
                            <?php
                                $sql = "SELECT * FROM initiative ORDER BY init_id DESC";
                                $sql_query = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_assoc($sql_query))
                                {
                                    echo "<option value=" . $row["init_id"] . ">" . $row["title"] . "</option>";
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
			            <div class="message2"><?php echo "Please select a title!"; ?></div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
    <nav class="navbar">
        <div class="container-fluid justify-content-around">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM initiative ORDER BY init_id DESC";
                            $sql_query = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_assoc($sql_query))
                            {
                                echo "<tr><td>" . $row["init_id"] . "</td>";
                                echo "<td class='text-center'><img src='Photos/Initiatives/" . $row['image'] . "'  width='200px'></td>";
                                echo "<td>" . $row["title"] . "</td>";
                                echo "<td>" . $row["description"] . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
        </div>
    </nav>
    
</body>
</html>