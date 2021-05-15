
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>transfer</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/yourStyles.css?<?php echo time(); ?>" />

  </head>
  <style>
    .text-center{
      width:18%;
      display: flex;
      align-content: center;
      margin:10rem 40rem;
      
    }
    form{
      text-align: center;
    }
    .form-control{
      width:15rem;
      height:2rem;
      margin-bottom:.2 rem;
    }
  </style>

  <body >

  <section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
       <div class="container-fluid">
            <a class="navbar-brand " href="#">Sparks Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5 ">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link active" href="customer.php">Add account</a>
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
    <section class="text-center">
      <main class="form-signin">
        <form action="" method="POST" >
          <h1 class="h3 mb-3 fw-normal">Transfer Money</h1>

            <input  class="form-control" id="floatingInput"name="name" placeholder="Name"><br>
            <input  type="email"class="form-control"name="email" id="floatingPassword" placeholder="email id"><br>
            <input  class="form-control"name="transaction" id="floatingPassword" placeholder="Amount"><br>
            <input type="submit"  class="button"name="submit" value="transfer">
         

          
        </form>
      </main>

      </section>
    
  </body>
</html>


<?php

  include 'connection.php';

  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
    //   $ = $_POST['account'];
      $transaction= $_POST['transaction'];
       
      // $insertquery ="insert into customers (`name`, `email`, `balance`) 
      // VALUES ('$name',' $email',' $balance'))";

      $insertquery = "INSERT INTO 'banking'.'transaction'(`name`, `email`, `transaction`,'date') 
      VALUES ('$name','$email','$transaction',current_timestamp())";

// INSERT INTO `transaction`(`id`, `name`, `email`, `transaction`, `date`) VALUES 
// ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
      // echo $sql;
      $insertquery =" insert into transaction(name,email,transaction) values('$name','$email','$transaction')";
     

      $res=mysqli_query($con,$insertquery);
      if($res){
        ?>
        <script>
        alert ("Money tranferred successfully");
       

        </script>
        <?php
      }
      else{
        echo "something is error";
      }
  }


  
?>
