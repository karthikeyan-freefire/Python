<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Us - Hostel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('bg.jpg');
            background-size: cover;
            color: #ffffff;
            margin: 0;
            padding: 0;
            position: relative; 
        }
        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        nav {
            background-color: #000000;
            color: #ffffff;
            padding: 15px 0;
            text-align: center;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #f8f9fa; /* Lighter color on hover */
        }
        section {
            padding: 60px 0;
            text-align: center;
        }
        section h2 {
            font-size: 2em;
            margin-bottom: 40px;
            color: #031e39;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #000000;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="DormDynasty.png" alt="Logo" style="height: 40px;"> 
                DormDynasty
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="why-choose-us">
        <div class="container">
            <h2 style="color:#ffffff">Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="reliable.jpg" alt="Reliable" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Reliable Service</h3>
                        <p>Our system is reliable and ensures smooth operations 24/7. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus posuere elit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="customizable.jpg" alt="Customizable" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Customizable Options</h3>
                        <p>We offer customizable options to meet your specific needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus posuere elit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="user-friendly.jpg" alt="User-Friendly" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>User-Friendly Interface</h3>
                        <p>Our interface is designed to be user-friendly, making it easy for anyone to use. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus posuere elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Hostel Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>