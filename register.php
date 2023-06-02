
<?php 
session_start();
include_once("./home.php") ?>

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <?php if(isset($_SESSION['message']))
  {  
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  unset($_SESSION['message']);
  }
  ?>
            <div class="card">
                <div class="card-header">
                    <h4> Registration Form</h4>
                </div>
                <div class="card-body">
                <form action="functions/authcode.php" method="POST">
                <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" >
   </div>

   <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email@example.com" aria-describedby="emailHelp">
   </div>
   
   <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="exampleInputPassword1">
  </div>
 <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
</form>
                </div>
            </div>
       </div>
    </div>
</div>
</div>


<?php include_once("./footer.php") ?>

