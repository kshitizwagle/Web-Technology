<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Session
    </title>
</head>

<body>
    <?php
    $_SESSION['name'] = "John Doe";
    $_SESSION['email'] = "johndoe@example.com";
    echo $_SESSION['name'] . " " . $_SESSION['email'];
    ?>
</body>
<?php
session_destroy();
?>

</html>