<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - Billing</title>
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
        .footer-icons img {
            height: 30px;
            margin: 0 10px;
        }
        .contact-details {
            margin: 20px 0;
            text-align: center;
        }
        .contact-details img {
            height: 30px;
            margin: 0 10px;
        }
        .contact-links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .price-table {
            margin-top: 30px;
            background-color: #f8f9fa;
            color: #333;
            border: 1px solid #dee2e6;
        }
        .price-table th,
        .price-table td {
            padding: 8px;
            text-align: center;
            border: 1px solid #dee2e6;
        }
        .billing-form {
            background-color: #000000;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .billing-form label {
            color: #ffffff;
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

    <section id="billing">
        <div class="container">
            <h2>Billing Information</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="billing-form">
                        <form>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="room-type">Room Type</label>
                                <select class="form-control" id="room-type" required>
                                    <option value="single">Single Room - ₹80,000</option>
                                    <option value="double">Double Room - ₹150,000</option>
                                    <option value="dormitory">Dormitory - ₹100,000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Billing Address</label>
                                <textarea class="form-control" id="address" rows="3" placeholder="Enter your billing address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="payment-method">Payment Method</label>
                                <select class="form-control" id="payment-method" required>
                                    <option value="credit-card">Credit Card</option>
                                    <option value="debit-card">Debit Card</option>
                                    <option value="net-banking">Net Banking</option>
                                    <option value="upi">UPI</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-details">
                <div>
                    <img src="insta.jpg" alt="Instagram">
                    <a href="https://www.instagram.com/youpage">Follow us on Instagram</a>
                </div>
                <br>
                <div>
                    <img src="whatsapp.jpg" alt="WhatsApp">
                    <a href="https://chat.whatsapp.com/6 crackheads">Join our WhatsApp Group</a>
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