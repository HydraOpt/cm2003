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
    // Now the element are submited in POST (array)
    $names =array("Fred", "Rob", "Ian");

    // If "submit" element of POST (array) is not empty
    if($_POST["submit"]) {
        // If "name" element of POST (array) is not empty (true)
        if ($_POST["name"]) {
            //foreach
            foreach($names as $name /* => $value is not inserted couse we are not interested*/){
                // if the var "name" in POST is equal to the element with placeholder $name in array $names
                if($_POST["name"]==$name){
                    echo "I know you, your name is ".$name;
                    //declaring a boolean var to true
                    $knowyou =1;
                }

            }
            if(!$knowyou){
                echo "I don't know you";
            }
         // If "name" is empty
        } else{
            echo "No name";
        }

    }

    ?>
<!-- In this case the form will submit using the POST method instead of GET(default) -->
    <form method ="post">
        <label for="name">Name</label>
<!--            create a variable named name and with submit it trigger a GET -->
        <input name="name" type="text" value="test"/>
        <input type="submit" name="submit" value="Submit your name"/>

    </form>

</div>
</body>
</html>


