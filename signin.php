<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'server.php';
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    $sql="SELECT * FROM payment WHERE email='$username' AND  password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0)
        {
           $logged=1;
           session_start();
           $_SESSION['email']=$username;
           header('location:Day4.php');
        }
        else{
          $invalid=1;
        }
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Hostel Management System</title>
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
        .sign-in-container {
            margin-top: 100px;
            max-width: 500px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .sign-in-form {
            padding: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
            width: 100%;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #23272b;
            border-color: #1d2124;
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
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
    <?php
    if($logged)
    {
        echo '<b>logged successfully</b>';
    }
    if($invalid)
    {
        echo '<b>Error</b>';
    }
    ?>
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

        <div class="container sign-in-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="sign-in-form">
                        <h2 class="text-center mb-4" style="color:#000000">Sign In</h2>
                        <form>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary"><a href="/signup">Sign In</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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