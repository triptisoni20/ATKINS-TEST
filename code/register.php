<?php include("config.php"); ?>

<?php

    $msg = "";

    $name=(isset($_GET['username']) ? $_GET['username'] : null);
    $email=(isset($_GET['email']) ? $_GET['email'] : null);
    $pwd=(isset($_GET['password']) ? $_GET['password'] : null);

    $res0=mysqli_query($con, "select * from `users` where `name`='".$name."' and `email`='".$email."'");

        //var_dump($res0);

        if (mysqli_num_rows($res0)) {
            $msg = "Already Registered";
        } else {
            $sql = "insert into `users`(`name`, `email`, `password`) values('$name', '$email', '$pwd')";

            $res = mysqli_query($con, $sql);

            if ($res == 1) {
                $msg = "Thank You For Registering";
            } else {
                $msg = "Cant be Registered";
            }
        }

        echo $msg;
?>


