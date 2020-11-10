
<?php
for ($x = 0; $x <= 10; $x++) {
   echo 'The number is: $x <br>';  
}
echo "<br>";
?>
<?php
for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
}
echo "<br>";
?>
<?php
$index = 1;
echo "Test ".$index." end of test";
echo "<br>";
?>


<?php
$days = ["Mon", "Tue", "Wed"];
echo "I like " . $days[0] . ", and hate " . $days[1] . " and " . $days[2] . ". <br>";
echo "Array Length: ".count($days)."<br><br>";
?>
<?php
$days = ["Mon", "Tue", "Wed"];
for ($i = 0; $i < count($days); $i++) {
   echo $days[$i];
   echo "<br>";
}
echo "<br>";
?>
<?php
$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
echo "Mon start at " . $age['Mon']."<br>";

foreach($age as $key => $value) {
   echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
echo "<br>";
?>


<div class="contactform">
    <a href="contact.html">Contact form</a>
</div>





<?php
$n=5;
$m=10;
$main_arr = array(array());
for ($i=0; $i<$n; $i++) {
    for ($j=0; $j<$m; $j++) {
        $main_arr[$i][$j] = rand(0, 100);
    }
}
?>

<?php
$n=5;
$m=10;
echo "<br>";

echo "<table style='font-size: 18px;'>
<tr>";
echo "<caption>Таблица элементов двумерного массива</caption>";
for ($i=0; $i<$n; $i++) {
    for ($j=0; $j<$m; $j++) {
        echo"<td style='border:1px solid black; padding: 5px;'>";
        echo $main_arr[$i][$j];
    }
    echo"</tr>";
}
echo"</table>";  
?>












