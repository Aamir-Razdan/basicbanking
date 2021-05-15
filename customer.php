<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" 
    crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/yourStyles.css?<?php echo time(); ?>" />

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
</head>
<style>
  hr{
    width:20%;
    text-align:center;
  }
  
</style>
<body>
    <section id="navbar">




        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
           <div class="container-fluid">
                <a class="navbar-brand brand-one" href="#">Sparks Bank</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5 ">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" href="dpcustomer.php">Customers</a>
            </li>
             <li class="nav-item mx-2">
              <a class="nav-link active" href="transfer.php">Transfer Money</a>
            </li>
             <li class="nav-item mx-lt-5">
              <a class="nav-link active" href="transaction.php">Transaction History</a>
            </li>
           
           
          </ul>
          
        </div>
      </div>
    
    
    
    
    
    
            
        </section>
    
    <section id="content">


        <h1 class="customer-heading">Sparks Bank</h1>
       
        <div class="container conainer-1">
      <div class="row">
       
        <div class="col">
         <img class="image-1" src="1.svg">
        </div>
        <div class="col column-one">
           
            <h3 class="form-heading">Add Account</h3>
          <div class="container-form">
            <form class="form-1" action="" method="POST">
              <input class="form-item" type="text" id="fname" name="name"placeholder="Name"><br>
              <input class="form-item" type="text" id="lname" name="email"placeholder="Email"><br>
              <input class="form-item" type="text"  name="mobile" placeholder="mobile no"><br>

              <!-- <input class="form-item" type="text" id="lname" name="account"placeholder="Account no"><br> -->
              <input class="form-item" type="text" id="lname" name="balance"placeholder="balance">
    
              <br>
              <!-- <a  class="transfer-home" href="transfer.php">Transfer</a> -->
              <input type="submit" class="button" name="submit" value="Add account">

              <!-- <button type="button" class="btn btn-secondary" name="submit">Add Account</button> -->
            </form> 
           </div>
          <!-- <button type="button" class="btn btn-Dark">transfer money</button> -->
         
          </div>
      </div>

    </div>





</section>
</body>
</html>

<?php

  include 'connection.php';

  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
    //   $ = $_POST['account'];
      $balance = $_POST['balance'];
       
      // $insertquery ="insert into customers (`name`, `email`, `balance`) 
      // VALUES ('$name',' $email',' $balance'))";

      $insertquery = "INSERT INTO 'banking'.'customers'(`name`, `email`, `balance`) 
      VALUES ('$name','$email','$balance')";
      // echo $sql;
      $insertquery =" insert into customers(name,email,balance) values('$name','$email','$balance')";
     

      $res=mysqli_query($con,$insertquery);
      if($res){
        // echo  "data transfer";
        ?>
        <script>
        alert ("account is added successfully");
       

        </script>
        <?php
      }
      else{
        echo "something is error";
      }
  }


  
?>
