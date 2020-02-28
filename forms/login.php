

 

 
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
            width:100%;
            height:100vh;
            background-image: url(../images/1.jpg);
            background-size:cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .log {
            max-width:700px;
            float:none;
            margin:50px auto; 
            background: rgba(220, 220, 220, 0.5);
            padding:30px;
        }

        .form-control {
            background-color:transparent !important;
        }
    </style>
</head>
<body>
    <div class="container text-primary">
    <div class="log">
    <div class="wrapper ">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="valid.php" method="post">
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control ">
                
            </div>    
            <div class="form-group ">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php" class="text-danger">Sign up now</a>.</p>
        </form> 
    </div> 
    </div>
    </div>   
</body>
</html>