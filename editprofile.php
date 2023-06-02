<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Investo - Best Investing Platform</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script type="text/javascript" src="js/main.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<?php 
session_start();
include_once("nav.php") 
?> 
<br><br>

<div class="container">
<div class="row">
<div class="col-md-4">

<div class="card" style="width: 18rem;">
<img src="./images/group.png" class="card-img-top mx-auto" style="width:60%" alt="User">
  <div class="card-body">
    <h5 class="card-title">Profile Info</h5>
    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Kumar</p>
    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
    <p class="card-text">Last Login : ####-##-##</p>
    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
  </div>
</div>
</div>
<div class="col-mid-8>
<div class="jumbotron" style="">

</div> </div>
</div>
</div>
<div align="center">
  <div class="col-md-6 offset-3">
    <form action="">
    <div class="form-group">
      <input type="text" name="updateUserName" class="form-control" value="">
    </div>
    <div class="form-group">
      <input type="email" name="userEmail" class="form-control" value="">
    </div>
    <div class="form-group">
      <input type="file" name="userImage" class="form-control" value="">
    </div>
    <div class="form-group">
      <input type="submit" name="update" class="btn btn-info" value="Update">
    </div>
</form>
  </div>
</div>


</body>
</html>
