<!DOCTYPE html>
<html lang="en">
<head>
    <title>Greeting</title>
</head>
<body>
    <?php
    $name=$_POST["name"];
    $mail=$_POST["mail"]; 
    if (empty($name)){
        echo "The name is required";
    }
    if (empty($mail)){
        echo " the mail is required";
    }
    $roles=$_POST["rol"];
    echo " your role(s) are: ";
    foreach($roles as $rol){
        echo $rol, " ";
    }
    ?>
</body>
</html>