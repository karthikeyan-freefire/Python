<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Hostel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/static/bgin.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: #ffffff;
            margin: 0;
            padding: 0;
            position: relative;
            overflow-x: hidden;
        }
        .content {
            position: relative;
            z-index: 2;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8) !important;
            padding: 15px 0;
        }
        .navbar-brand {
            color: #ffffff !important;
            margin-right: 30px;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin-right: 10px;
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff !important;
        }
        .about-us-container {
            margin-top: 100px;
            max-width: 800px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .about-us-content {
            padding: 30px;
        }
        .about-us-content h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .about-us-content p {
            color: #333;
            line-height: 1.6;
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            z-index: 2;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>
    <div class="content">

        <nav class="navbar navbar-expand-lg navbar-dark">
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
                        <a class="nav-link" href="http://127.0.0.1:5500/home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:5500/aboutus.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signin">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Sign Up</a>
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

        <div class="container about-us-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="about-us-content">
                        <h2>About Us</h2>
                        <p>
                            Welcome to DormDynasty, your go-to solution for managing hostel accommodations with ease and efficiency. Our platform is designed to cater to the needs of students, hostel administrators, and property managers. We believe in creating a seamless experience for everyone involved in the hostel management process.
                        </p>
                        <p>
                            Our mission is to simplify and streamline the way hostels are managed, providing a user-friendly interface and powerful features that enhance communication, improve efficiency, and ensure a safe and comfortable living environment for all residents.
                        </p>
                        <p>
                            At DormDynasty, we are committed to delivering top-notch service and continuous innovation to meet the evolving needs of our users. Join us on this journey to revolutionize hostel management and create a better living experience for everyone.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 Hostel Management System. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>