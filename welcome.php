<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome - <?php echo $_SESSION['username']?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    
        <style>
            /* *{
                background-image: linear-gradient(45deg, rgb(255, 0, 140),rgb(33, 0, 124));
            } */
            body{
                background-image: linear-gradient(45deg, rgb(255, 0, 140),rgb(33, 0, 124));
                background-repeat: no-repeat;
                background-blend-mode: normal;
                background-size: cover;
                color: white;
                padding: 5%;
                height:630px;
                text-shadow:4px 4px 4px rgb(0, 0, 0);
            }
            h1{
                font-size:70px;
                color:cyan;
            }
            p{
                font-size:40px;
            }
            a{
                color:yellow;
            }
            a:hover{
                color:pink;
            }
        </style>
    </head>


    <body>
            <?php  ?>
        <h1>Welcome - <?php echo $_SESSION['username']?></h1>
        <p>Hello <?php echo $_SESSION['username']?>, you have successfully created the loginsystem</p>

        <p class="mb-0">Whenever you need to, be sure to logout <a href="/php/web_training/day-21_Assignment(login_system)/logout.php">using this link</a>.</p>
        <script src="" async defer></script>
    </body>
</html>