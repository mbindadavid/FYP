<html>
<head>
    <title>secondpage</title>
    </head>
    <body>
    <?php
        print_r($_GET);
        $id = $_GET['id'];
        $name = $_GET['name'];
        echo "<br /><strong>" .$id. ":{$name}</strong>";
        ?>
        <br />
        <?php
        $string = "mbinda david";
        echo urlencode($string);
        echo "<br />";
        echo rawurlencode($string);
        ?>
    </body>
</html>