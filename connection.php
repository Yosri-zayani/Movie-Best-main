 <?php 
 $db_host = "localhost";
 $db_user = "root";
 $db_name = "bestmovie";
 $db_pass = "";
 $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

 if(!$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name)){
    die("failed to connect"); 
 }

 
 
 ?>