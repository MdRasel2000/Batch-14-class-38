
<?php

include "config.php"

?>

<?php


$id = $_GET['id'];

$qury = "SELECT * FROM students WHERE id = $id";

$singleData = mysqli_query($connected,$qury);

$data = mysqli_fetch_assoc($singleData);

$id      =$data["id"];
$name    =$data["name"];
$class   =$data["class"];
$roll    =$data["roll"];
$phone   =$data["phone"];
$email   =$data["email"];
$address =$data["address"];




if(isset($_POST["submit"])){

$name= $_POST["name"];
$roll= $_POST["roll"];
$class= $_POST["class"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$address= $_POST["address"];


  $qury = "UPDATE students SET name = '$name',  roll = $roll, class = '$class', phone = '$phone', email = '$email', address = '$address' WHERE id = $id ";
  $uptdata= mysqli_query ($connected , $qury);

 if($uptdata){
  
  header("location: index.php");

 }

 else{
  echo'failed to insertData';

 }

}

?>

<!doctype html>
<html lang="en">
  <head>"
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">insert students data</a>
        
    </div>
  </div>
</nav>
    
  <section class= "mt-5 container">
  <form action="" method ="post">
  <div class="mb-3 " >
    <label for="name" class="form-label">Students Name</label>
    <input type="text" class="form-control" value="<?php echo $name?>" name ="name" id="name" required>
</div>

<div class="mb-3">
    <label for="roll" class="form-label">Students Roll</label>
    <input type="number" class="form-control"  value="<?php echo $roll?>" name ="roll" id="roll" required>
</div>

<div class="mb-3">
    <label for="class" class="form-label">Students Class</label>
    <input type="text" class="form-control"   value="<?php echo $class?>" name ="class" id="class" required>
</div>


<div class="mb-3">
    <label for="phone" class="form-label">Students Phone</label>
    <input type="text" class="form-control"  value="<?php echo $phone?>" name ="phone" id="phone" required >
</div>

<div class="mb-3">
    <label for="email" class="form-label">Students Email</label>
    <input type="text" class="form-control"  value="<?php echo $email?>" value="<?php echo $name?>" name ="email" id="email" required>
</div>

<div class="mb-3">
    <label for="address" class="form-label">Students Address</label>
    <textarea class="form-control" name ="address" id="address" required><?php echo $address?></textarea>
</div>


 
  <button type="submit" name="submit" class="btn btn-primary">update</button>
  
</form>

  </section>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>