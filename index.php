<?php 
if(isset($_POST['chk'])) {
    $val = explode('@', $_POST['email'], 2);
        echo $val['1']; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Checker</title>
</head>
<body>
    
    <form action="" method="post">
        <p>Enter a email </p> 
        <input type="email" name="email" id="email" > 
        <input type="submit" value="Get" name="chk">
    </form>


</body>
</html>