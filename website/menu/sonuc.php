<html lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dört İşlem</title>
</head>
<body>
<?php
if (isset($_POST["gonder"]))
{
    $s1=$_POST["sayi1"];
    $s2=$_POST["sayi2"];
echo "Toplam". ($s1+$s2)."<br>"; 
echo "Carpam". ($s1*$s2)."<br>";
echo "Çıkarma". ($s1-$s2)."<br>";
echo "Bölme". ($s1/$s2)."<br>";
}
?>
</body>
</html>