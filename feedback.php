<?

$from = $_POST['e'];
$to = "npf1963@bk.ru";
$subject = $_POST['s'];
$message =  $_POST['n'], $_POST['t'], $_POST['m'], $_POST['c']; 

mail($from, $to, $subject, $massege); 

echo "Thak you for your message";
echo "<a href='index.html'><h2>Home</h2></a>";
?>