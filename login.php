<?php
session_start();
?>

<?php 
if(isset($_POST['submit']))
{
    $_SESSION['me'] = 'me';
    header("location: index.php");
    
}

?>


<html>
    <head>
        <title>
            Sign In
        </title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet"  type="text/css" href="css/font-awesome.min.css">
        
    </head>
    <body>
        <section class="main">
            <img id="logo" src="media/image/SupertechLogo.gif">
            
            <h1 id="company-name"> Supertech Trading Co.</h1>
            <form action="" method="POST" id="login-form">
                <p><i class="fa fa-user"></i><input type="text" name="username" id="username" value="" placeholder="Username" maxlength="20"></p>
                <p><i class="fa fa-key"></i><input type="password" name="password" id="password" value="" placeholder="Password" maxlength="20"></p>
                <p><button type="submit" name="submit" id="submit">Log In</button</p>
            </form>
            
        </section>
    </body>
        
</html>



