<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the-dream</title>
</head>
<body><center>
    <form action="index.php" method="post" style ="height: 350px">
        <label for="query"> AMOUNT : </label> 
        <input type="text" name="amount" placeholder="Enter Amount">
        <input type="submit" name ="convert">
        <select name="from">
            <option value="convert from">convert from</option>
            <option value="MGA">MGA</option>
            <option value="EUR">EUR</option>
        </select>
        <select name="to"> <p>convert to :</p>
            <option value="convert to">convert to</option>
            <option value="EUR">EUR</option>
            <option value="MGA">MGA</option>
        </select>
        

    </form> </center>
<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset ($_POST ['convert']))
{
    $amount = $_POST['amount'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    if ($from == 'EUR' AND $to == 'MGA') 
    {
        echo "<br><center><b style='background: orange;'><font size='16rem'> $amount € = "; 
        echo "<br><center><b style='background: pink;'> ";
        echo $amount * 4502;
        echo " MGA ";
        echo "</b></center>";
    }
    if ($from == 'MGA' AND $to == 'EUR') 
    {
        echo "<br><center><b style='background: orange;'><font size='16rem'> $amount MGA = "; 
        echo "<br><center><b style='background: pink;'>  ";
        echo $amount / 4502;
        echo " € ";
        echo "</b></center>";
    }
}
?>
</body>
</html>