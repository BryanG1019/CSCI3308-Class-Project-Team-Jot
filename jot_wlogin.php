<html>
<head>
<title> Jot Homepage </title>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.mi
n.js"></script>

<script>
$(document).ready(function(){
 $('.button').click(function(){
 var clickBtnName = $(this).attr('name');
 var ajaxurl = 'http://localhost/SQLDeleteHandler.php';
 var data = {'student_Id': clickBtnName};
 $.post(ajaxurl, data, function(response) {
 window.location.href="http://localhost/jot_wlogin.php";
});
});
});
</script>

</head>
<body>
<?php
// Obtain a connection object by connecting to the db
// Define database access:
DEFINE ('host', 'localhost');
DEFINE ('user', 'root');
DEFINE ('password', 'password');
DEFINE ('dbName', 'jot');
$connection = @mysqli_connect (host,user,password,dbName); // please fill these parameters with the actual data
if(mysqli_connect_errno())
{
 echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
 echo "<h4>Successfully connected to MySQL: </h4>";
}
// Query and result set
$query = "Select * from simple_table;";
$resultset = mysqli_query($connection,$query);
//Display table and delete button
while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."  ".$row[4]." ".$row[5]."<input type=\"submit\" class=\"button\" name=\"".$row[0]."\"
value=\"delete\"/><br>";
}
?>


<!-- WRITE FORM-->
<center>
<form enctype="multipart/form-data"
action="http://localhost/SQLInsertwlogin.php">
<p>Student Id:&nbsp <input type="text" name="student_Id" size="10" maxlength="11"
/></p>
<p>First Name:&nbsp <input type="text" name="first_Name" size="10"
maxlength="20" /></p>
<p>Last Name:&nbsp <input type="text" name="last_Name" size="10" 
maxlength=”20” /></p>
<p>Password:&nbsp <input type="password" name="PasswordHash" size="10"
maxlength="15" /></p>
<br>
<input type="submit" value="Create User" /> &nbsp
<input type="reset" />
</form>
</center>



<div id="footer">
	<br>  	
	<img src="//localhost/logo.png" />
</div>



</body>
</html>