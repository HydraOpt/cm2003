<!doctype html>
<html>

<head>
    <title>Address Book</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>

<body>
<div>
    <?php
        if($_GET["name"]){
            echo "The name is ".$_GET['name'];
        }

    ?>
    <form>
        <label for="name">Name</label>
            //create a variable named name and with submit it trigger a GET
        <input name="name" type="text" value="test"/>
        <input type="submit"/>

    </form>

</div>
</body>
</html>


