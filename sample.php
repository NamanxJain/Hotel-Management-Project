<?php

if(isset($_POST['submit']))
{
    print_r($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" value="naman" name='name'>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>