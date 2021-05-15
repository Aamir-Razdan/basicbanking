
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>