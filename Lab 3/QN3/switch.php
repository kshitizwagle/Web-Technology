<!DOCTYPE html>
<html>

<head>
    <title>Switch case</title>
</head>

<body>
    <?php
    $var = 'notBhaktapur';
    echo "My favorite place is ";
    switch ($var) {
        case 'Kathmandu':
            echo "Kathmandu";
            break;
        case 'Lalitpur':
            echo 'Lalitpur';
            break;
        default:
            echo 'Not found in data.';
    }
    ?>
</body>

</html>