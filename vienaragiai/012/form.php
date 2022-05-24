<?php
//scenarijus POST
$_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    die($_POST['tek']);
    header('Location: http://localhost/php-paskaitos/vienaragiai/012/form.php');
    die;

}

// Scenarijus GET
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "" method = "post">
        Tavo tekstas: <input type = "text" name = "tek">
        <button type = "submit">GO</button>
    </form>
</body>
</html>