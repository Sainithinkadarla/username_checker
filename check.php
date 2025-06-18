<?php 
require_once("config.php");
//code check email
if(!empty($_POST["emailid"])) {
$uemail=$_POST["emailid"];
$sql ="SELECT email FROM email_availabilty WHERE email=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $uemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
echo "<span style='color:red'> Email Already Exit .</span>";
else
 echo "<span style='color:green'> Email Available.</span>";

}
// End code check email

//Code check user name
if(!empty($_POST["username"])) {
$username=$_POST["username"];
$sql ="SELECT username FROM email_availabilty WHERE username=:username";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
 echo "<span style='color:red'> Username already exit .</span>";
	else 
echo "<span style='color:green'> Username Available.</span>";
}
// End code check username
?>
