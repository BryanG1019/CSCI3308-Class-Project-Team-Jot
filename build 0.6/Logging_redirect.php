<html>
<body>
     <h1> Your are logging in!! </h1>
    <img src='jot_background1.png' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
    <div id="counter">3</div>
     <script>
    <?php

if(!session_id()) session_start();
include("global.php");


$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$db_name = $_SESSION['db_name'];
$tbl_name = $_SESSION['tbl_name'];

// Connect to server and select databse.
$connection = @mysqli_connect ($host, $username,$password, $db_name);

// username and password sent from form 
$student_id=$_REQUEST['student_id']; 
$PasswordHash=$_REQUEST['PasswordHash']; 

//SQL query
$sql="SELECT * FROM $tbl_name WHERE student_id='$student_id' and PasswordHash='$PasswordHash'";
$result = mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['student_id'] = $student_id;
}
header('Location:Login_screen.php');
?>


</script>
    <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                location.href="note_database.php";
            }
        }, 1000);
    </script>
   
</body>
</html>