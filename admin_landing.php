<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_landing_style.css">
    <title>Admin Panel</title>
</head>
<body>
<?php
	require('admin_check.php');
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="logo">
            <img src="Photos/Self/logo.png" class="navbar-brand" height="80px">
            <b class="navbar-brand">Admin Panel</b>
        </div>
        <div class="upper_buttons">
            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="logout_back.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
        <table class="table">
        
            <tbody>
                <tr>
                    <td scope="row"><a href="initiatives.php" class="btn btn-primary">Initiatives</a></td>
                </tr>
                <tr>
                    <td scope="row"><a href="locations.php" class="btn btn-primary">Locations</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="btn btn-primary"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Emergencies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hospitals_admin.php">Hospitals</a></li>
                                <li><a class="dropdown-item" href="fire_stations_admin.php">Fire stations</a></li>
                                <li><a class="dropdown-item" href="police_stations_admin.php">Police stations</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn btn-primary"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=4">Atms</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=5">Restaurants</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=6">Beauty salons</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=7">Gas</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=8">Grocery stores</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=9">Hotels</a></li>
                                <li><a class="dropdown-item" href="services_admin.php?p_t_id=10">Pharmacies</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn btn-primary"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Things to do</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="things_to_do_admin.php?p_t_id=11">Attractions</a></li>
                                <li><a class="dropdown-item" href="things_to_do_admin.php?p_t_id=13">Parks</a></li>
                                <li><a class="dropdown-item" href="things_to_do_admin.php?p_t_id=15">Museums</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    
</body>
</html>