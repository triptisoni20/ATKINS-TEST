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
                        <div class="row"><a href="index.php" style="color: #0f0f0f;">Log In</a></div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 style="color: #fffcfd ">Welcome to TEST</h1>
                <div class="row">
                    <div class="col-md-6"style="color: #fffcfd">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Pellentesque volutpat vestibulum diam in varius.
                            Suspendisse eu bibendum massa.
                            Suspendisse potenti. Quisque eget malesuada mauris,
                    </div>
                    <div class="col-md-6" style="color: #fffcfd">
                            sed euismod mi. Aenean sed ornare tellus.
                            Integer elementum maximus dictum. Ut in viverra
                            justo. Proin convallis est et purus accumsan gravida.
                            Vestibulum leo dui, tincidunt sed elit sit amet, finibus.
                    </div>
                </div>

            </div>
        </div>
    </div>

        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-login">
                        <div class="panel-heading" style="background-color: #1e2f45;">
                            <div class="row">
                                <div class="col-xs-6 lineSeparatorRight" id="right">
                                    <a href="#" class="active border" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6"  id="left">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body" style="background-color: #1e2f45;">
                            <div class="row">
                                <div class="col-lg-12" id="loginDiv">
                                    <h2 style="color: white; padding-bottom: 10px; padding-left: 10px">Login in to Test</h2>
                                    <div class="col-md-6">
                                    <form id="login-form" onsubmit="return validate()" action="login.php" method="GET" role="form" style="display: block;">
                                        <div class="form-group">
                                            <div style="color: white">Email-Address</div>
                                            <input type="email" name="email" id="emailL" tabindex="1" class="form-control topBorder" placeholder="Email" value="" onblur="change(this)">
                                        </div>
                                        <div class="form-group">
                                            <div style="color: white">Password</div>
                                            <input type="password" name="password" id="passwordL" tabindex="2" class="form-control topBorder" placeholder="Password" onblur="change(this)">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="col-md-6" id="links" style="padding-top: 20px">
                                        <div class="panel panel-default" style="background-color: rgba(255,255,255,0.3);">
                                            <div class="panel-body">
                                                <p style="color: white">Not yet registered for a
                                                TEST account?</p>
                                                <a id="register-link" style="color: white">Click here to register</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="register-form" role="form" onsubmit="return register()" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div style="color: white">Name</div>
                                                        <input type="text" name="username" id="usernameR" tabindex="1" class="form-control topBorder" placeholder="Username" value="" onblur="change(this)">
                                                        <div class="usrError"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div style="color: white">Email-Address</div>
                                                        <input type="email" name="email" id="emailR" tabindex="1" class="form-control topBorder" placeholder="Email Address" value="" onblur="change(this)">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div style="color: white">Password</div>
                                                        <input type="password" name="password" id="passwordR" tabindex="2" class="form-control topBorder" placeholder="Password" onblur="change(this)">
                                                    </div>
                                                    <div class="form-group">
                                                        <div style="color: white">Confirm Password</div>
                                                        <input type="password" name="confirm-password" id="confirm-passwordR" tabindex="2" class="form-control topBorder" placeholder="Confirm Password" onblur="change(this)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-login" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Scackbar-->
        <div id="snackbar"></div>

        <!--Write Scripts Here-->
        <script>
            $(function() {
                $('#login-form-link').click(function(e) {
                    $("#login-form").delay(100).fadeIn(100);
                    $("#links").delay(100).fadeIn(100);
                    $("#register-form").fadeOut(100);
                    $('#register-form-link').removeClass('active');
                    $('#right').addClass('lineSeparatorRight');
                    $('#left').removeClass('lineSeparatorLeft');
                    $(this).addClass('active');
                    e.preventDefault();
                });
                $('#register-form-link').click(function(e) {
                    $("#register-form").delay(100).fadeIn(100);
                    $("#login-form").fadeOut(100);
                    $("#links").fadeOut(100);
                    $('#login-form-link').removeClass('active');
                    $('#left').addClass('lineSeparatorLeft');
                    $('#right').removeClass('lineSeparatorRight');
                    $(this).addClass('active');
                    e.preventDefault();
                });
                $('#register-link').click(function(e) {
                    $("#register-form").delay(100).fadeIn(100);
                    $("#login-form").fadeOut(100);
                    $("#links").fadeOut(100);
                    $('#login-form-link').removeClass('active');
                    $('#left').addClass('lineSeparatorLeft');
                    $('#right').removeClass('lineSeparatorRight');
                    $(this).addClass('active');
                    e.preventDefault();
                });
            });

            jQuery(document).ready(function (){
                var navOffset = jQuery(".header").offset().top;

                $(".header").wrap('<div class="header-placeholder"></div>');

                $(".header-placeholder").height($(".header").outerHeight());

                $(".header").wrapInner('<div class="header-inner"></div>');
                $(".header-inner").wrapInner('<div class="header-inner-most"></div>');
                jQuery(window).scroll(function (){
                    var scrollPos = jQuery(window).scrollTop();

                    if(scrollPos >= navOffset){
                        jQuery('.header').addClass('fixed');
                    }else{
                        jQuery('.header').removeClass('fixed');
                    }
                });

            });
        </script>

        <script>

            //Global Variables
            var password;

            //Validation Checks while Registering
            function change(input) {
                //Username Validation
                if(input.name == "username") {
                    if(input.value == "") {
                        showSnackBar("Please Enter Your Username", 1000);
                        input.focus();
                    }
                    else {
                        if(!isNaN(input.value)){
                            showSnackBar("Username Cannot Be Number", 1000);
                            input.focus();
                        }
                    }
                }
                //Email Validation
                if(input.name == "email") {
                    if(input.value == "") {
                        showSnackBar("Please Enter Your Email Address", 1000);
                        input.focus();
                    }
                    else {
                        if(!input.value.includes("@")){
                            showSnackBar("Email Must Contain @", 1000);
                            input.focus();
                        }
                        else {
                            var arr = input.value.split("@");
                            var len = arr.length;
                            if (len > 2) {
                                showSnackBar("Email Must Not Contain More Than One @", 1000);
                                input.focus();
                            }
                            else{
                                if(arr[1]==""){
                                    showSnackBar("Please Enter a Part Following @. Your Email is Incomplete.", 1000);
                                    input.focus();
                                }
                            }
                        }
                    }
                }
                //Password Validation
                if(input.name == "password") {
                    if(input.value == "") {
                        showSnackBar("Please Enter A Password", 1000);
                        input.focus();
                    }
                    else {
                        password = input.value;
                        if(input.value.length < 8){
                            showSnackBar("Password Must Contain At Least 8 Characters", 1000);
                            input.focus();
                        }
                    }
                }
                //Conforming Passwrd
                if(input.name == "confirm-password") {
                    if(input.value == "") {
                        showSnackBar("Please Re-Enter Your Password", 1000);
                        input.focus();
                    }
                    else {
                        if(password != input.value){
                            showSnackBar("Password Don't Match", 1000);
                            input.focus();
                        }
                    }
                }
            }

            //Validation checks before Logging In
            function validate()
            {
                var usr_flag = true;
                var pwd_flag = true;

                var username = $('#emailL').val();
                var pwd = $('#passwordL').val();

                if(username == ""){
                    $('#emailL').focus();
                    usr_flag == false;
                }

                if(pwd == ""){
                    $('#passwordL').focus();
                    $('#login-submit').focus();
                    pwd_flag = false;
                }

                if(usr_flag == true && pwd_flag == true){
                    return true;
                }
                else{
                    return false;
                }
            }

            //Registration Process.
            function register(){

                var usr_flag = false;
                var pwd_flag = false;
                var email_flag = false;
                var pwd_confirm_flag = false;

                var username = $('#usernameR').val();
                var email = $('#emailR').val();
                var pwd = $('#passwordR').val();
                var pwd_confirm = $('#confirm-passwordR').val();

                if(username != ""){
                    usr_flag = true;
                }
                else {
                    $('#usernameR').focus()
                }

                if(email != ""){
                    email_flag = true;
                }
                else{
                    $('#emailR').focus()
                }

                if(pwd != ""){
                    pwd_flag = true;
                }
                else{
                    $('#passwordR').focus()
                }

                if(pwd_confirm != "" && pwd_confirm.length>=8){
                    pwd_confirm_flag = true;
                }
                else{
                    $('#confirm-passwordR').focus();
                    $('#register-submit').focus();
                }

                if(usr_flag == true && email_flag == true && pwd_flag == true && pwd_confirm_flag == true){
                    $.ajax({
                        url: 'register.php',
                        type: 'GET',
                        data: { username: username, email: email, password: pwd},
                        success: function(response) {
                            if(response.indexOf("Thank") > -1) {
                                //alert(response);
                                window.location.replace("display_register.php");
                            }
                            else {
                                showSnackBar(response, 3000);
                            }
                        }
                    });
                }
                else {
                    //alert("Not Empty");
                }
                return false;
            }

            //Snackbar Display
            function showSnackBar(msg, time){
                    var div = document.getElementById("snackbar");
                    div.innerHTML = msg;
                    div.className = "show";
                    setTimeout(function () {div.className = div.className.replace("show", "");}, time);
            }
        </script>

    </body>
</html>