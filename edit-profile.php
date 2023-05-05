<?php
   include('session.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient-portal</title>
    <link rel="stylesheet" href="css/styles.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
 
 
 
 
  <body style="background:url('images/backgroundimg.jpeg'); background-size: cover;">
  



<nav class="navbar navbar-expand-lg bg-light pl-8">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;HOSPITAL-MS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto custom-nav">
              <li class="nav-item custom-nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="pateint-panel.php">Dashboard</a>
              </li>
              <li class="nav-item custom-nav-item">
                <a class="nav-link" href="CONTACT.HTML">CONTACT</a>
              </li>
			  <li class="nav-item custom-nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
             
            </ul>
          </div>
        </div>
</nav>

      
				</div>
			</div>

            
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            
            <div class="card-body">
              <center>
              <h5>Patient Profile Edit</h5><br>
              <form class="form-login" action = "fun.php" method = "post">
                <div class="row">
                  <div class="col-md-4"><label>First Name: </label></div>
                  <div class="col-md-8"><input type="text" name="fname" class="form-control" placeholder="enter First name" required/></div><br><br>
                  <div class="col-md-4"><label>Last Name: </label></div>
                  <div class="col-md-8"><input type="text" name="lname" class="form-control" placeholder="enter Last name" required/></div><br><br>
                  
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                  <div class="col-md-4"><label>Age: </label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="AGE" placeholder="enter age" required/></div><br><br><br>
                  <div class="col-md-4"><label>Address </label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="Address" placeholder="enter Address" required/></div><br><br><br>
                  <div class="col-md-4"><label>City: </label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="City" placeholder="enter City" required/></div><br><br><br>
                
                </div>
                <center><input type="submit" id="inputbtn" name="edit" value="Edit" class="btn btn-primary"></center>
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>