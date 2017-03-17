<!doctype html>
<html>
  <head>
    <title>My First Webpage</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <div>

      <?php
      //return true if submit has a value, aka click
        if ($_GET["submit"]) {
          //return true if the variable "name" exists
          if ($_GET["name"]) {
            //concatenate the value of the variable name
            echo "Your name is ".$_GET['name'];
          } else {
            echo "Please enter your name";
          }
        }
        ?>

        <form>
          <label for="name">Name</label>
          <input name="name" type="text" />
          <input type="submit" name="submit" value="Submit Your Name" />
        </form>

      </div>
    </body>
</html>
