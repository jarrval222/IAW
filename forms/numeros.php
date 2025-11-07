<!DOCTYPE html>
<html lang="en">
<head>
    <title>Greeting</title>
</head>
<body>
    <?php echo "<p> The sum is ", $_GET["number1"] + $_GET["number2"], ".</p>"; ?>
    <?php echo "<p> The difference is ", $_GET["number1"] - $_GET["number2"], ".</p>"; ?>
    <?php echo "<p> The product is ", $_GET["number1"] * $_GET["number2"], ".</p>"; ?>
    <?php echo "<p> The quotient is ", $_GET["number1"] / $_GET["number2"], ".</p>"; ?>

</body>
</html>