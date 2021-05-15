<?php
    $username ="root";
    $password="";
    $server='localhost';
    $db='banking';
 
    $con = mysqli_connect($server,$username,$password,$db);
   
     if($con){
         ?>
         <script>
        //  alert ("server is connect");
        

         </script>
         <?php
     }else 
        echo  "<h1>no connect</h1>";
        // this tell why you not connect
        //die("connection is not sucsse" .mysqli_connect_error());
?>