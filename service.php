<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Hostel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('bgin.jpg');
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
        .service-container {
            margin-top: 100px;
            max-width: 800px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            color:#000000;
        }
        .service-content {
            padding: 30px;
        }
        .service-content h2 {
            color: #000000;
            margin-bottom: 20px;
        }
        .service-content p {
            color: #000000;
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

        <div class="container service-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="service-content">
                        <h2>Our Services</h2>
                        <p>
                            At DormDynasty, we offer a comprehensive suite of services to ensure that managing your hostel is as easy and efficient as possible. Our platform provides a range of features tailored to meet the needs of students, administrators, and property managers.
                        </p>
                        <p>
                            <strong>Room Booking and Allocation:</strong> Streamline the room booking process with our user-friendly interface that allows students to easily book and manage their accommodations.
                        </p>
                        <p>
                            <strong>Maintenance Requests:</strong> Quickly report and track maintenance issues with our integrated maintenance request system, ensuring that problems are resolved promptly.
                        </p>
                        <p>
                            <strong>Communication Tools:</strong> Enhance communication between residents and administrators with our built-in messaging system, ensuring everyone stays informed and connected.
                        </p>
                        <p>
                            <strong>Payment Management:</strong> Simplify the payment process with our secure online payment system, allowing for easy management of rent and other fees.
                        </p>
                        <p>
                            <strong>Security Features:</strong> Ensure the safety of residents with our robust security features, including access control and emergency response systems.
                        </p>
                        <p>
                            <strong>Event Management:</strong> Plan and manage events effortlessly with our event management tools, helping to create a vibrant and engaging community.
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