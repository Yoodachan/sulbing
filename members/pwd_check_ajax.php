  <?php
  $pwd = $_GET["pwd"];
  
  $connect = mysqli_connect("localhost","root","");
  $db_con = mysqli_select_db($connect, "front");
 
  $sql="select * from users where pwd='$pwd'";
  $result=mysqli_query($connect, $sql);
  $num_match=mysqli_num_rows($result);

  if(!$num_match){
	echo "N";
  } else{
	 echo "Y";
  }
?>