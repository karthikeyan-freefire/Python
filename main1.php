<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Features</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/static/bg.jpg');
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
            color: #f7f9fb;
        }
        .feature-links {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .feature-card {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #f7f9fb;
        }
        .feature-card p {
            color: #f7f9fb;
        }
        .feature-card a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .feature-card a:hover {
            color: #f8f9fa; /* Lighter color on hover */
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
                        <a class="nav-link" href="http://127.0.0.1:5500/home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:5500/aboutus.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:5500/main.html">Service</a>
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

    <section id="features">
        <div class="container">
            <h2>Hostel Management Features</h2>
            <div class="feature-links">
                <div class="feature-card">
                    <h3>Leave Permission</h3>
                    <p>Allow students to request leave online and streamline approval process.</p>
                    <a href="http://127.0.0.1:5500/maintananceReq.html">Leave Permission</a>
                </div>
                <div class="feature-card">
                    <h3>Attendance Tracker</h3>
                    <p>Efficiently track student attendance and generate reports for monitoring.</p>
                    <a href="http://127.0.0.1:5500/attendence.html">Attendance</a>
                </div>
                <div class="feature-card">
                    <h3>Billing</h3>
                    <p>Automate billing process, manage invoices, and track payments seamlessly.</p>
                    <a href="http://127.0.0.1:5500/bill.html">Billing</a>
                </div>
                <div class="feature-card">
                    <h3>Room Allocation</h3>
                    <p>Manage room allocation for students, including preferences and availability.</p>
                    <a href="http://127.0.0.1:5500/room_allocate.html">Room Allocation</a>
                </div>
                <div class="feature-card">
                    <h3>Maintenance Request</h3>
                    <p>Allow students to submit maintenance requests and track their status.</p>
                    <a href="http://127.0.0.1:5500/maintananceReq.html">Maintenance Request</a>
                </div>
                <!-- Add more features as needed -->
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