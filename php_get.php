

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// error_reporting(0);

$v1 = $_GET['v1'];
$v2 = $_GET['v2'];

if(isset($v1) && isset($v2))
{
    echo "Sum is:".($v1+$v2);
}
?>
    
<form action="php_get.php" method="get">
<input type="text" name="v1" id="">
<input type="text" name="v2" id="">
<input type="text" name="" value="<?php echo $v1+$v2; ?>" id="">
<button type="submit">Send</button>
</form>

</body>
</html>

