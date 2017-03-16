<!doctype html>
<html>

<head>
    <title>My First Webpage</title>
    !
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> !
</head>
!

<body>
    <div>

        <?php
        $echo "does it work at all";
        $emailTo="battistoniserena@gmail.com";
        $subject="You are hot!";
        $body="You really are. L ammiratore segreto";
        $headers="From: ammiratoremisterioso@callme.com";
        if (mail($emailTo, $subject, $body, $headers)) {
            echo "Mail sent successfully!";
          } else {
              echo "Mail not sent!";
            }
            ?>
    </div>
</body>

</html>
