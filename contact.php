
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="./css/contact.css">-->
    <title>Investo - Best Investing Platform</title>

</head>

<body>
<?php include_once("./home.php") ?>
    
<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4><center> Contact Us </center></h4>
                </div>
                <div class="card-body bg-dark text-white">

    <form action="" method="POST">

   
   
   <div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email@example.com" aria-describedby="emailHelp"aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group ">
  <span class="input-group-text">Query</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<BR>
<Center>
 <button type="submit" name="submit_btn" class="btn btn-light">Subimt</button>
</center>
</form>
                </div>
            </div>
       </div>
    </div>
</div>
</div>

<?php include_once("./footer.php") ?>

</body>

</html>