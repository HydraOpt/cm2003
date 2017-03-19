<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    $tableName = "`organization`";

    //creating connection
    $link = mysqli_connect("eu-cdbr-azure-north-e.cloudapp.net", "befc77d2972871", "032b4371", "big_daddy");
    echo mysqli_connect_error();

    //saving query input
    $qSelectAll ="SELECT * FROM ".$tableName;

    if($result=mysqli_query($link, $qSelectAll)){
        $row = mysqli_fetch_array($result);
        print_r($row);
    } else {
        echo "query failed";
    }

    /*
    $qInsert = "INSERT INTO `organization`(`name`, `address`, `phone_number`) VALUES('Camelot', 'Cornwall', '0000001')";
    mysqli_query($link, $qInsert);
    */

    $qUpdate="UPDATE ".$tableName." SET `email` ='merlinthemage@camail.com' WHERE `id`=11 LIMIT 1";
    mysqli_query($link, $qUpdate);
/*
    if(mysqli_connect_error()){
        die("Cannot connect to db");
    } */
/*
    if($_POST["submit"]){
        $result = '<div>Form Submitted</div>';
    }
    else {
        $result = 'Something Wrong';
    }

    if(!$_POST["name"]){
        $error ="<br />A name is required";
    }

    if(!$_POST["phone"]){
        $error .="<br />Phone is missing";
    }

    if(!$_POST["address"]){
         $error .="<br />Address is missing";
    }

    if(!$_POST["email"]){
         $error .="<br />Email is missing";
    }

    if($error){
        $result='<div> Error: '.$error.'</div>';
    } else {
        //todo without errors
    } */
?>


<!doctype html>
<html>

<head>
    <title>My First Webpage</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <style>
        #form {
            border: 1px solid black;
            margin-top: 10px;
            padding: 10px;
            background-color: #88bbd6;
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

    <div id="form">
        <h1>My Address Book</h1>
<!--        <?php //echo $result; ?> -->

        <form method="post">

            <div class="form-group">
                <label for="organization">Organization Name:</label>
                <br>
                <input type="text" name="name" class="form-elem">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <br>
                <input type="text" name="address" class="form-elem">
            </div>


            <div class="form-group">
                <label for="phone">Telephone Number:</label>
                <br>
                <input type="text" name="phone" class="form-elem">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <br>
                <input type="email" name="email" class="form-elem">
            </div>

            <input type="submit" name="submit" class="btn" value="submit"/>


        </div>

</body>

</html>


