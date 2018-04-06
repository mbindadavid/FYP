<?php
session_start();
?>
<html>
<head> 
    <title>session</title>
    </head>
<body>
  <?php
    $_SESSION['fname']= "david";
    $_SESSION['lname']= "mbinda";
    ?>
    <?php
    $name = $_SESSION['fname'] . " " . $_SESSION['lname'];
    echo $name;
    ?>
</body>
</html> 
    