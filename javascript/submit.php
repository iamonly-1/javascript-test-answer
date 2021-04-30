<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db_connect"

$con = new mysqli($servername,$username,$password,$dbname);
if ($con ->connect_erro){
	die("Connection failed:" . $con ->connect_erro)
}
$fname = $_POST['fname'];

$sql = "INSERT INTO 'tbl_contact'('id','fldname') VALUE('o','fname')";

if ($con->query($sql) === TRUE) {
	echo "new recode created successfully";
}else{
	echo "Errr: " .$sql ."<br>". $con->error;
}
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
$con->close();
?>