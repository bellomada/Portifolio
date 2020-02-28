
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Lawal Mada| Web Developer</title>
	<link rel="icon" type="image/png" href="images/male-technologist.png" hreflang="en-us">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
	

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="../css/custom.css">
     <!-- favicon -->
     <link rel="shortcut icon" type="image/png" href="images/belo.jpg"/>
    <style type="text/css">
       body {
           background-image: url(../images/1.jpg);
           background-size: cover;
           background-position: center;
           height:100vh;
       }

       .regs {
           max-width:700px;
           float:none;
           margin:150px auto;
           background-color:#fff;
           padding:30px;
       }


    </style>
</head>
<body>
    <div class="container text-primary">
        <div class=:"regs">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="reg.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
               
            </div>   
            <div class="form-group">
                <label> Password </label>
                <input type="password" name="password" class="form-control" >
            <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control ">
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
               
            </div>
            <p>Already have an account? <a href="login.php" class:"text-danger">Login here</a>.</p>
        </form>
    </div>
    </div>    
</body>
</html>