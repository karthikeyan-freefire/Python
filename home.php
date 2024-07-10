<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:LoginDay4.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
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
            background-color: #000000;
            color: hsl(0, 25%, 97%);
            border: 1px solid #ffffff;
        }
        .price-table th,
        .price-table td {
            padding: 8px;
            text-align: center;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <?php
    echo 'Welcome to the page'
    ?>
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
                        <a class="nav-link" href="http://127.0.0.1:5500/signin.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:5500/signup.html">Sign Up</a>
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

    <section id="welcome">
        <div class="container">
            <h2>Welcome to Our Hostel Management System</h2>
            <p>Experience comfort, convenience, and community at our hostel. We offer a range of accommodations and services to make your stay enjoyable and hassle-free.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="AboutUs.jpg" alt="About Us" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>About Us</h3>
                        <p>Welcome to our hostel! We're committed to your comfort and safety, offering a friendly atmosphere and excellent service. Join us for a memorable stay!</p>
                        <a href="http://127.0.0.1:5500/aboutus.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="serive.jpg" alt="Our Services" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Our Services</h3>
                        <p>Our hostel management system simplifies bookings, inventory, and payments. With user-friendly features, it streamlines operations, allowing you to focus on providing exceptional service.</p>
                        <a href="http://127.0.0.1:5500/main.html" class="btn btn-primary">View Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="yUs.jpg" alt="Why Choose Us" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Why Choose Us</h3>
                        <p>At our hostel, we prioritize excellence. From check-in to check-out, expect a comfortable stay with attentive service. Join us for a memorable experience!</p>
                        <a href="/ycus" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="facilities">
        <div class="container">
            <h2>Our Facilities</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="room.jpg" alt="Rooms" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Comfortable Rooms</h3>
                        <p>Our rooms are designed to provide maximum comfort and convenience. Choose from single, double, or dormitory-style rooms.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="commonarea.jpg" alt="Common Areas" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Common Areas</h3>
                        <p>Relax and socialize in our spacious common areas. Enjoy free Wi-Fi, TV, and games.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="dining.jpg" alt="Dining" class="img-fluid mx-auto d-block mb-4" style="border-radius: 10px;">
                        <h3>Dining</h3>
                        <p>Enjoy delicious and nutritious meals in our dining hall. We offer a variety of dishes to cater to different tastes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container">
            <h2>Pricing</h2>
            <table class="price-table table table-bordered">
                <thead>
                    <tr>
                        <th>Room Type</th>
                        <th>Price per Year (INR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Single Room</td>
                        <td>₹80,000</td>
                    </tr>
                    <tr>
                        <td>Double Room</td>
                        <td>₹150,000</td>
                    </tr>
                    <tr>
                        <td>Dormitory</td>
                        <td>₹100,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-details">
                <div>
                    <img src="/static/insta.jpg" alt="Instagram">
                    <a href="https://www.instagram.com/youpage">Follow us on Instagram</a>
                </div>
                <br>
                <div>
                    <img src="/static/whatsapp.jpg" alt="WhatsApp">
                    <a href="https://chat.whatsapp.com/6crackheads">Join our WhatsApp Group</a>
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