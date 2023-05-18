<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITC Social Network</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    #login{
        width: 60%;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;
    }
    #login:hover{ 
        width: 60%;
        background-color: #fff;
        color: #1da1f2;
        border: 2px solid #1da1f2;
        border-radius: 30px;
    }
    .well{
        background-color: #2994c2;
    }
</style>
<body>
  <div class="row">
      <div class="col-sm-12">
          <div class="well">
              <center><h1 style="color: white;">NITC Social Network</h1></center>
          </div>
      </div>
  </div> 
  <div class="row">
      <div class="col-sm-6" style="Left:10%;">
       <img src="images/nitclogo.png" class="img-rounded" title="NITC Social Network" width="300px" height="365px">
       
    </div>

  <div class="col-sm-6" style="Left:8%;">
  <img src="images/imgg.png" class="img-rounded" title="NITC Social Network" width="400px" height="85px">
  <h2><strong> <br>    </strong></h2><br><br>
  <h4><strong>join NITC Social Network.</strong></h4>
  <form method="post" action="">
      <button id = "signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>

      <?php
            if(isset($_POST['signup'])){
                echo "<script>window.open('signup.php','_self')</script>";
            }
      ?>

      <button id = "signup" class="btn btn-info btn-lg" name="login">Login</button><br><br>

      <?php
            if(isset($_POST['login'])){
                echo "<script>window.open('signin.php','_self')</script>";
            }
      ?>
  </form>
</div>
</div>
</body>
</html>