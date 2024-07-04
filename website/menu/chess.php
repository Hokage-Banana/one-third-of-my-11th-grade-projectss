<title>Satrang</title>
<style> .siyah{
background-color:#000; color:#FFF;
}
</style></head><body>
<?php
$rastgele=rand(1,64); 
echo '<table width="400" height="400" border="1">'; 
$x=0;
$sayac=1;
for($i=0;$i<8;$i++)
{
echo '<tr>';
for($a=0;$a<8;$a++)
{ 
if($rastgele==$sayac) {
echo '<td width="50" height="50"> <img src="resim/re.jpg" width="30" height="35" /> </td>';
}   
else {
//siyah beyaz
if($a%2==$x) { echo '<td class="siyah">'.$sayac.'</td>'; } else { echo '<td>'.$sayac.'</td>';}
}
$sayac++;
}
//siyah
if($x%2==1) { $x=0; }
else
{ $x=1; }
echo '</tr>';
} echo '</table>';
?>
</body> </html>