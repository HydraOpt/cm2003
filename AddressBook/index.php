<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    if($_POST["submit"]){
        $result = '<div>Form Submitted</div>';
    }
    else {
        $result = 'Something Wrong';
    }

    if(!$_POST["name"]){
        $error ="A name is required";
    }

    if($error){
        $result='<div> Error: '.$error.'</div>';
    }
?>


<!doctype html>
<html>

<head>
    <title>My First Webpage</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <style>
        .form {
            border: 1px solid black;
            margin-left: 10px;
            margin-top: 10px;
            padding: 10px;
        }
        </style>
</head>

<body>



    <?php
    /*
    echo "does it work at all";
    $emailTo = "alessio.gadaleta@gmail.com";
    $subject = "You are good!";
    $body = "You really are. L ammiratore segreto";
    $headers = "From: ammiratoremisterioso@callme.com";
    if (mail($emailTo, $subject, $body, $headers)) {
        echo "Mail sent successfully!";
    } else {
        echo "Mail not sent!";
    }
    */
    ?>

    <div class="form">
        <h1>My Address Book</h1>
        <?php echo $result; ?>

        <form method="post">

            <div class="form-group">
                <label for="organization">Organization Name:</label>
                <br>
                <input type="text" name="name" class="form-elem" placeholder="organization name">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <br>
                <input type="text" name="address" class="form-elem" placeholder="organization main addres">
            </div>


            <div class="form-group">
                <label for="phone">Telephone Number:</label>
                <br>
                <input type="text" name="phone" class="form-elem" placeholder="organization phone number">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <br>
                <input type="email" name="email" class="form-elem" placeholder="something@something.com">
            </div>

            <input type="submit" name="submit" class="btn" value="submit"/>


        </div>

</body>

</html>


