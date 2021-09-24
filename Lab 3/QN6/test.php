<html>

<head>
    <title>Division by Zero</title>
</head>

<body>
    <?php
    require_once 'DivisionByZeroException.php';

    use DivisionByZeroException as GlobalDivisionByZeroException;

    function divide($dividend, $divisor)
    {
        if ($divisor === 0) {
            throw new GlobalDivisionByZeroException("Cannot divide by 
            Zero.");
        }
        return $dividend / $divisor;
    }

    try {
        divide(1, 0);
    } catch (GlobalDivisionByZeroException $e) {
        echo $e->exceptionMessage();
    }

    ?>
</body>

</html>