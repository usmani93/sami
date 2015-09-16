<html>
<style>
body{
background-image:url('test.png');
text-align:center;
font-family:'Trebuchet MS';
font-size:20px;
}
h1{
color:#00f;
text-align:center;
font-family:'Trebuchet MS';
text-decoration:underline;
text-shadow:0 0 20px green;
}
.b{
border:none;
background-color:khaki;
text-align:center;
font-family:'Trebuchet MS';
font-size:20px;
text-shadow:0 0 20px gray;
color:#057;
}
</style>
<body>
<?php
$db='usmani93';
$lh='localhost';
$us='usmani93';
$ps='Ezioauditore93';
$id=$_POST['id'];
$a=$_POST['age'];
$c=$_POST['city'];
$e=$_POST['email'];
$ft=$_POST['fname'];
$fn=$_POST['name'];
$g=$_POST['gen'];
$i=$_POST['iname'];
$lname=$_POST['lname'];
$ph=$_POST['pnh'];
$prog=$_POST['prog'];
$state=$_POST['state'];
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$q = "INSERT INTO as VALUES ('$fn','$lname','$a','$ft','$e','$state','$c','$ph','$i','$prog','$g','$id')";
$mysqli->query($q);
echo 'Added Successfully';
//mysqli_close();
echo "<br>";
echo "<h1>You Have Entered: </h1>";
echo "<br>";
echo "Name: ".$_POST["name"];
echo " ".$_POST["lname"];
echo "<br>";
echo "Father's Name: ".$_POST["fname"];
echo "<br>";
echo "Age: ".$_POST["age"];
echo "<br>";
echo "Gender: ".$_POST["gen"];
echo "<br>";
echo "E-mail: ".$_POST["email"];
echo "<br>";
echo "Institute: ".$_POST["iname"];
echo "<br>";
echo "Program: ".$_POST["prog"];
echo "<br>";
echo "City: ".$_POST["city"];
echo "<br>";
echo "State: ".$_POST["state"];
echo "<br>";
echo "Phone (Home): ".$_POST["pnh"];
echo "<br>";
echo "ID: ".$_POST["id"];
?>
<form>
<input type="button" value="Back To Home" onClick="parent.location='form.html'" class="b">
</form>
</body>
</html>
