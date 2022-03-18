<?php
$insert = false;
        if(isset($_POST['name'])){
           // $insert = false;
       
        
        $server ="localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pnone = $_POST['phone'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO `indratravel`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`)
        VALUES ('$name', '$age', '$gender', '$email', '$pnone', '$desc', current_timestamp());";
       //echo "$sql";
        
       if($con->query($sql) == true){
          // echo "Successfully inserted";
          $insert = true;
       }
       else{
        echo "ERROR: $sql <br> $con->error";
       
       }
       
       $con->close();
    }


    ?>
