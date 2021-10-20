<!DOCTYPE html>
<html>

<head>
    <title>SQL Time</title>
    <?php 
        $user="username";
        $password="password";
        $database="database";
        mysql_connect("", $user, $password);
        @mysql_select_db($database) or die( "Unable to select database");
    ?>
</head>

<body>

    <h1>Enter your query as q=[query], with password as p=[password]</h1>

    <b>
        <?php 
            $query = $_GET["q"];
            $pass = $_GET["p"];

            if ($pass == "") {
                $result = mysql_query($query);
                echo $result;
            } else {
                echo "Wrong password";
            }
        ?>
    </b>

</body>

</html>