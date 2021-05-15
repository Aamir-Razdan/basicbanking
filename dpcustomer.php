
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        .table-customer{
            padding:5rem;
        }
        .transfer-home{
    padding:8px 40px;
    /* width:120px;
    height:10px; */
    color:#fff;
    background-color:#000;
    text-decoration:none;
    margin-top:4rem;
  }
  
  .transfer-home:hover{
    color:red;
  }
    </style>
</head>

<body>
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
          <a class="nav-link active" href="displayTransection.php">Transaction History</a>
        </li>
       
       
      </ul>
      
    </div>
  </div>




	</section>
    <section style="text-align:center;" class="table-customer">
      <h3>cutomers</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>

                <th>email</th>
                <th>balance</th>

            </tr>
        </thead>
        <tbody>
                    <?php
                    include 'connection.php';

                    $selectquery ="select * from customers";

                    $query =mysqli_query($con,$selectquery);

                    $nums =mysqli_num_rows($query);
                
                //   echo $nums;

                    while(   $res = mysqli_fetch_array($query)){
                             
                        ?>
                                    <tr>
                            <td><?php echo $res['id']  ?></td>
                            <td><?php echo $res['name']  ?></td>
                            <td><?php echo $res['email']  ?></td>
                            <td><?php echo $res['balance']  ?></td>

                            
                        </tr>
             <?php

                    }
                    
                    

            ?>
           
        </tbody>
    </table>
    </section>
</body>
</html>