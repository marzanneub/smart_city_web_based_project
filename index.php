<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Photos/Self/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index_style.css">
    <title>Smart city</title>
</head>
<body>
    <div class="main">
        <header class="header">
            <img src="Photos/Self/1.jpg" alt="">
            <img src="Photos/Self/2.jpg" alt="">
            <img src="Photos/Self/3.jpg" alt="">
        </header>
        <script src="js/bootstrap.bundle.min.js"></script>
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
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Emergencies</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hospitals</a></li>
                                <li><a class="dropdown-item" href="#">Fire stations</a></li>
                                <li><a class="dropdown-item" href="#">Police stations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Atms</a></li>
                                <li><a class="dropdown-item" href="#">Beauty salons</a></li>
                                <li><a class="dropdown-item" href="#">Gas</a></li>
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
        
    </div>
</body>
</html>