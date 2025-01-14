<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index_style3.css">
    <title>Smart City</title>
</head>
<body>
<?php
require('connect.php');
?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <div class="main">
        <header class="header">
            <img src="Photos/Self/1.jpg" alt="">
            <img src="Photos/Self/2.jpg" alt="">
            <img src="Photos/Self/3.jpg" alt="">
        </header>
        <script>
            const images = document.querySelectorAll('.header img');
            let currentIndex = 0;
        
            function changePhoto() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }
            setInterval(changePhoto, 2000);
        </script>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="Photos/Self/logo.png" class="navbar-brand" height="50px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Emergencies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hospitals.php">Hospitals</a></li>
                                <li><a class="dropdown-item" href="fire_stations.php">Fire stations</a></li>
                                <li><a class="dropdown-item" href="police_stations.php">Police stations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Atms</a></li>
                                <li><a class="dropdown-item" href="#">Beauty salons</a></li>
                                <li><a class="dropdown-item" href="#">Gas</a></li>
                                <li><a class="dropdown-item" href="#">Grocery stores</a></li>
                                <li><a class="dropdown-item" href="#">Hotels</a></li>
                                <li><a class="dropdown-item" href="#">Pharmacies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Things to do</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Attractions</a></li>
                                <li><a class="dropdown-item" href="#">Gyms</a></li>
                                <li><a class="dropdown-item" href="#">Parks</a></li>
                                <li><a class="dropdown-item" href="#">Libraries</a></li>
                                <li><a class="dropdown-item" href="#">Museums</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="login.php"><button class="btn btn-primary" type="submit">Login</button></form>
                </div>
            </div>
        </nav>

        <div class="item">
          <h1>Our initiatives</h1>
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php
                    $sql = "SELECT * FROM initiative";
                    $sql_query = mysqli_query($con, $sql);
                    $found = mysqli_num_rows($sql_query);
                    $x = 0;
                    $k=0;
                    while($k<$found)
                    {
                        $x = 0;
                        echo '<div class="carousel-item active"><div class="cards-wrapper">';
                        while($x<3)
                        {
                            if(!$row = mysqli_fetch_assoc($sql_query)) break;
                            echo '<div class="card" style="width: 18rem;">
                                        <img src="Photos/Initiatives/' . $row['image'] .'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">' . $row['title'] .'</h5>
                                        <p class="card-text">' . $row['description'] .'</p>
                                    </div>
                                    </div>
                            ';
                            $x++;
                            $k++;
                        }
                        echo '</div></div>';
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
    </div>
</body>
</html>
