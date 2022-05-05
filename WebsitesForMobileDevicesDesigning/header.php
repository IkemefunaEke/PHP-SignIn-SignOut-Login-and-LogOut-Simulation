<?php 
    session_start();
?>
<DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>PHP Project 01 </title>
            <link rel="stylesheet" href="css/mystylee.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire|neon|outline|emboss|shadow-multiple">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
            
        </head> 
        <body>
            <nav>
                <div class="wrapper">
                    <div class="logo">
                        <a href="index.php"><img src="img/ike.jpg" alt="Blogs logo"></a>
                    </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="discover.php">About Us</a></li>
                        <li><a href="blog.php">Find Blogs</a></li>
                        <?php
                           if(isset($_SESSION["userid"])){
                               
                               echo "<li><a href='includes/logout.inc.php'>Log out</a></li";
                           }
                           else {
                                echo "<li><a href='signup.php'>Sign Up</a></li>";
                                echo "<li><a href='login.php'>Log In</a></li";
                           }
                        ?>
                    </ul>
                </div>
            <nav>

            <div class="wrapper">