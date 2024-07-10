<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Leave Permission</title>
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
        .leave-form {
            background-color: #000000;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .leave-form label {
            color: #ffffff;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/static/DormDynasty.png" alt="Logo" style="height: 40px;">
                DormDynasty
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About</a>
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

    <section id="leavePermission">
        <div class="container">
            <h2>Request Leave Permission</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="leave-form">
                        <form id="leaveForm">
                            <div class="form-group">
                                <label for="residentName">Resident Number</label>
                                <input type="text" class="form-control" id="residentNumber" placeholder="Enter your room number" required>
                            </div>
                            <div class="form-group">
                                <label for="leaveDate">Leave Date</label>
                                <input type="date" class="form-control" id="leaveDate" required>
                            </div>
                            <div class="form-group">
                                <label for="returnDate">Return Date</label>
                                <input type="date" class="form-control" id="returnDate" required>
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason for Leave</label>
                                <textarea class="form-control" id="reason" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit Request</button>
                        </form>
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
    <script>
        // JavaScript for handling form submission
        document.getElementById('leaveForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting

            // Fetch the values from the form
            var residentName = document.getElementById('residentNumber').value;
            var leaveDate = document.getElementById('leaveDate').value;
            var returnDate = document.getElementById('returnDate').value;
            var reason = document.getElementById('reason').value;

            // Simulate leave request submission (you would replace this with your backend logic)
            console.log('Leave request submitted by ' + residentNumber);
            console.log('Leave Date: ' + leaveDate);
            console.log('Return Date: ' + returnDate);
            console.log('Reason: ' + reason);

            // Reset the form
            document.getElementById('leaveForm').reset();
        });
    </script>
</body>
</html>