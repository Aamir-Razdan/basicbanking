
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <title>trip</title>
    <link rel="stylesheet" href="public/css/style.css">


    <!-- bootstap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</head>
<style>
  .transfer-home{
    padding:8px 40px;
    /* width:120px;
    height:10px; */
    color:#fff;
    background-color:#000;
    text-decoration:none;
    margin-top:4rem;
  }
  .col-para{
    margin:30px 0 ;
  }
  .transfer-home:hover{
    color:red;
  }
  /* .navbar{
    background-color:#C0FEFC;
  }
  .navbar-brand{
    color:#04009A;
    font-weight:700;
  }
  .nav-link{
    font-weight:550;
  } */
</style>
<body>

<section id="navbar">




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


	<section id="content">



                    <div class="container conainer-1">
                  <div class="row">
                    <div class="col column-one">
                      <h1 >Sparks Bank</h1>
                     <p class="col-para" style="color:#00y;">The advantage of online banking is that you can pay 
                     bills superfast,and your accounts is automatically credited
                      or debited for eash deposit and payment make it easier to 
                     stay on strack
                    </p>
                    <!-- <button type="button" class="btn btn-Dark">transfer money</button> -->
                    <!-- <button type="button" class="btn btn-secondary"><a href="transfer.php" >transfer money</a></button> -->
                   <!-- <input type="submit" class="button" name="submit" value="transfer" href="customer.php"> -->
                   <a  class="transfer-home" href="transfer.php">Transfer</a>

                    </div>
                    <div class="col">
                     <img class="image-1" src="1.svg">
                    </div>
                    
                  </div>
                </div>



 
		
	</section>
	

    <script src="index.js"></script>
</body>
</html>

<?php

  // include 'connection.php';

 
?>



