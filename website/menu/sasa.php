<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="1">
        <tr><td colspan="2"><h1>OTOPARK ÜCRET HESAPLAMA PROGRAMI</h1></td>
        <tr><td>Otoparkta Kalış Süresi</td>
        <td><input type="text" name="sure"/></td> 
        <tr><td colspan="2"><input type="submit" value="Hesapla" name="Hesap" /></td>
        <tr><td></td><td>
        <?php
        if(isset($_POST["Hesap"]))
        {$a=$_POST["sure"];
        if($a<=3)
        {echo "Borcunuz yoktur. Güle güle...";}
        else if($a<=13)
        {$para=($a-3)*5;
        echo "Borcunuz ".$para." TL'dir.";
        }
        else
        {echo "<h2><font color=green>Borcunuz 50 TL'dir.</font></h2>";}}
        else
        {echo "Lütfen süreyi giriniz";} ?>
        </form></td>
</body>
</html>