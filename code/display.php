<?php include("config.php"); ?>

<?php
if(empty($_SESSION['user']))
{
    header('location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Code Test For ...">
    <meta name="author" content="Tripti Soni">

    <title>Login & Regisster</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Bootstrap (Online)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="header" style="position: fixed">
            <div class="col-md-6 col-md-offset-3">
                <ul>
                    <li class="pull-left">
                        <img src="image/Atkins-Logo-Black.jpg" style="height: 100%; padding-bottom: 20px; width: auto;">
                    </li>
                    <li >
                        <div class="row"><a href="logout.php" style="color: #0f0f0f;">Log Out</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container" style="padding-top: 150px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body center">
                    <h1><font color="#FFFFFF">Hi&nbsp;<br /><?php echo $_SESSION['user']; ?></font></h1>
                    <h3><font color="#FFFFFF">You Have Successfully Logged In</font></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>