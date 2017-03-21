<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $orgTable = "`organization`";

    //creating connection
    $link = mysqli_connect("eu-cdbr-azure-north-e.cloudapp.net", "befc77d2972871", "032b4371", "big_daddy");
    //error check
    echo mysqli_connect_error();

    /* //saving query input
    $qSelectAll ="SELECT * FROM ".$orgTable;

    if($result=mysqli_query($link, $qSelectAll)){
        $row = mysqli_fetch_array($result);
        print_r($row);
    } else {
        echo "query failed";
    } */

    /*
    $qInsert = "INSERT INTO `organization`(`name`, `address`, `phone_number`) VALUES('Camelot', 'Cornwall', '0000001')";
    mysqli_query($link, $qInsert);
    */

    /*$qUpdate="UPDATE ".$orgTable." SET `email` ='merlinthemage@camail.com' WHERE `id`=11 LIMIT 1";
    mysqli_query($link, $qUpdate); */
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

    function load() {
        global $link;
        $query = "SELECT * FROM `organization`;";
        if($result=mysqli_query($link, $query)) {
            while ($row = mysqli_fetch_array($result)) {
                echo 'var orgSel = document.getElementById("orgSelector");',
                'var option = document.createElement("option");',
                    'option.text = "' . $row["name"] . '";',
                    'option.value = ' . $row["id"] . ';',
                'orgSel.add(option);';
            }
        }
    }

    function deleteCurrOrg()
    {
        echo "alert('delete start');";
        global $link;
        if ($_POST) {
            echo "alert('if post');";
            if ($_POST["orgSelector"]) {
                echo "alert('if org sel');";
                $orgId = $_POST["orgSelector"];
                $query = "DELETE FROM `organization` WHERE `orgId`=" . $orgId . ";";
                mysqli_query($link, $query);

            } 
        }
    }










?>
<script type="text/javascript">
    function updateSelectors() {
        var orgSel = document.getElementById("orgSelector");
        orgSel.options.length = 0;
        <?php load(); ?>;

    }

    function loadPeople(){
        var peoSel = document.getElementById("peopleSelector");
        peoSel.options.length = 0;
        <?php loadPeople() ?>;
    }

    function addOrg(){
        document.getElementById("title").innerText = "Add New Organisation";
        inputVisible();
    }

    function inputVisible(){
        var group = document.getElementsByClassName("form-group");
        for(var i = 0; i < group.length; i++){
            group[i].style.display = "block";
        }
    }

    function deleteOrg(){
        <?php deleteCurrOrg() ?>;
    }



</script>


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

        .form-group {
            display: none;
        }

        </style>

</head>

<body>

    <div id="form">
        <h1>My Address Book</h1>
        <br>

        <div id="organisationDiv">
            <form method="post">
                <button type="submit" onclick="updateSelectors()">Load Organisations</button>
                <br>

                <label for="orgSelector">Organization</label>
                <select name="orgSelector" id="orgSelector" <!-- onchange="" -->>
                <script type="text/javascript">
                    updateSelectors();
                </script>
            </select>

            <br>
            <button type ="submit">Load</button>
            <button type ="button" onclick="addOrg()">Add</button>
            <button type ="submit">Edit</button>
            <button type ="button" onclick="deleteOrg()">Delete</button>

        <br>

            <label for="peopleSelector">People</label>
            <select name="peopleSelector" id="peopleSelector">
            </select>
            <br>
            <button type ="submit">Load Person</button>
            <button type ="button">Add</button>
            <button type ="button">Edit</button>
            <button type ="button">Delete</button>
            </form>
        </div>


        <br>

        <form action="insertOrg.php" method="post">

            <div class="form-group">

                <label id="title">Default</label>
                <br>
                <label for="name">Name:</label>
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
                <input type="text" name="email" class="form-elem">
            </div>
            <div class="form-group">
            <input type="submit" name="submit" class="btn" value="submit"/>
                </div>

        </div>
    </form>

    <div id="outputDiv">
        </div>

    <script type="text/javascript">
        loadPeople();
    </script>



</body>

<footer>
    <?php
    if($_POST)print_r($_POST);

    function loadPeople()
    {
        global $link;
        if ($_POST) {
            if ($_POST["orgSelector"]) {
                $orgId = $_POST["orgSelector"];
                $query = "SELECT * FROM `people` WHERE `orgId`=" . $orgId . ";";
                if ($result = mysqli_query($link, $query)) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo 'var peoSel = document.getElementById("peopleSelector");',
                        'var option = document.createElement("option");',
                            'option.text = "' . $row["name"] . '";',
                            'option.value = ' . $row["idpeople"] . ';',
                        'peoSel.add(option);';
                    }
                } else {
                    echo "nothing loaded";
                }


                printOrg($orgId);
            }
        }
    }

    function printOrg($orgId){
        global $link;
        $query = "Select * FROM `organization` WHERE `id`=".$orgId.";";
        $result=mysqli_query($link, $query);
        $row =mysqli_fetch_array($result);
        echo 'document.getElementById("outputDiv").innerHTML += "<p>Organisation name: '.$row["name"].'</p><p>Address: '.$row["address"].'</p><p>Phone Number: '.$row["phone_number"].'</p><p>Email: '.$row["email"].'</p>";';
    }


    ?>


</footer>

</html>


