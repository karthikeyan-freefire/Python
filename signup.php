<?php
$registered=0;
$userexists=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'server.php';
    $username=$_POST['username'];
    $ebnumber=$_POST['ebNumber'];
    $email=$_POST['email'];
    $password=$_POST['Password'];
    $sql="SELECT * FROM payment WHERE username='$username' AND ebNumber='$ebnumber'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $userexists=1;
        }
        else{
            $sql="INSERT INTO payment (username,Password,ebNumber,email) VALUES('$username','$password','$ebnumber','$email')";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                $registered=1;
            }
            else{
                die(mysqli_error($con));
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function formValidation()
        {
            let x =document.forms['form2']['name'].value;
            if(x== ""){
                alert("name must be filled out");
                return false;
            }
        }
        function newFunction()
        {
            document,getElementById("form2").reset();
        }
    </script>
   <style>
        body {
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        .signup-form {
          width: 340px;
          margin: 50px auto;
          background-color: rgba(248, 250, 249, 0.9); /* semi-transparent background */
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .signup-form h2 {
          margin-bottom: 30px;
          color: #403434;
          text-align: center;
        }
        .form-group {
          margin-bottom: 20px;
        }
        .form-group input {
          width: 100%;
          padding: 12px;
          border: 1px solid #cedad0;
          border-radius: 5px;
        }
        .btn {
          font-size: 16px;
          font-weight: bold;
          width: 100%;
        }
        .btn-primary {
          background-color: #007bff;
          border: 1px solid #22ff00;
          color: white;
        }
        .btn-primary:hover {
          background-color: #0056b3;
          border: 1px solid #0056b3;
        }
        .signup-form a {
          color: #007bff;
          text-decoration: underline;
        }
        .signup-form a:hover {
          text-decoration: underline;
        }
        .error-message {
          color: red;
          font-size: 12px;
        }
      </style>
</head>
<body>
<?php
if($userexists)
{
    echo '<b>User Already Exist</b>';
}
if($registered)
{
    echo '<b>Registered Successfully</b>';
}
?>
    <div class="signup-form">
    <form action="signupDay4.php" method="post" id="form2" name="form2" onSubmit="return formValidation()">
          <h2>SIGNUP</h2>
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Firstname" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="ebNumber" placeholder="Lastname" required="required">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required="required">
            <span class="error-message" id="passwordError"></span>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
        </form>
        <p class="text-center">Already have an account? <a href="LoginDAY4.php">Log in here</a></p>
      </div>
</body>
</html>