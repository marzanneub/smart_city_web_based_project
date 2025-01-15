<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Things to do</title>
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="things_to_do_style3.css">
</head>
<body>
<?php
    require('connect.php');

    $p_t_id = $_GET['p_t_id'];
    $sql2 = "SELECT * FROM place_type WHERE p_t_id='$p_t_id'";
    $sql_query2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_assoc($sql_query2);
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
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </nav>
    
    <div class="item">
        <nav class="navbar">
            <div class="container-fluid justify-content-around">
                <?php
                    $sql = "SELECT * FROM place JOIN locations ON place.location_id=locations.location_id WHERE p_t_id=$p_t_id";
                    $sql_query = mysqli_query($con, $sql);
                    $found = mysqli_num_rows($sql_query);
                    $x = 0;
                    $k=0;
                    while($k<$found)
                    {
                        $x = 0;
                        while($row = mysqli_fetch_assoc($sql_query))
                        {
                            echo '<div class="card" style="width: 18rem;">
                                    <img src="Photos/Things_to_do/' . $row['image'] .'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row['p_name'] .'</h5>
                                        <p class="card-text">' . $row['description'] .'</p>
                                        <div class="footer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                            </svg>
                                            <h6 class="card-text">' . $row['name'] .'</h6>
                                        </div>
                                    </div>
                                </div>
                            ';
                            $x++;
                            $k++;
                        }
                    }
                ?>
            </div>
        </nav>
    </div>
    
</body>
</html>