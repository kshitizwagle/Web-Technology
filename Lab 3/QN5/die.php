<html>

<head>
    <title>Die statement</title>
</head>

<body>
    <?php
    $site = "https://apple.com";
    fopen($site, "r")
        or die("Unable to connect to $site");
    ?>
</body>

</html>