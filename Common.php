<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignupPage.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="LoginPage.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    <div style="padding-top: 139px;  padding-bottom: 250px ;margin: auto;">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                        </form><br/>
                    </div>
                    <div class="panel-footer"><p>Don't have an account? <a href="#">Register</a></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer style="background-color: black; padding-top: 10px;">
        <div class="container">
            <p style="text-align: center; background-color: black; color: white; ">Copyright © Lifestyle Store. All
                Rights
                Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>
</html>