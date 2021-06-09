<!--  <?php
 require_once 'admin/vender/connect.php';
$search_q=$_POST['search_q'];
$search_q = trim($search_q);
$search_q = strip_tags($search_q);
$q= mysqli_query($connect, "SELECT `place` FROM `requests` WHERE `name` LIKE 'Асем'");
$itog=mysqli_fetch_assoc($q);
  while ($itog = mysqli_fetch_assoc($q)) {
 printf("%s (%s)\n",$r["name"],$r["place"]);
 }
 mysqli_free_result($q);
  mysqli_close($connect);

?> -->