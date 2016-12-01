<?php include("config.php"); ?>

<?php
    $name=(isset($_GET['email']) ? $_GET['email'] : null);
    $pwd=(isset($_GET['password']) ? $_GET['password'] : null);

    if(!empty($_SESSION['user']))
    {
        header('location:display.php');
        exit;
    }

    $res=mysqli_query($con, "select * from `users` where `email`='".$name."' and `password`='".$pwd."'");

    echo $name;
    echo $pwd;

    if(mysqli_num_rows($res))
    {
        $r=mysqli_fetch_row($res);
        $_SESSION['user']=$r[1];
        header('location:display.php');
        exit;
        echo "Success";
    }
    else
    {
        header('location:index.php');
        exit;
    }
?>

