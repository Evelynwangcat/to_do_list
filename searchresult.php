<?php
session_start();
include("includes/search.php");
include("header.php");
include("nav.php");
$userid = $_SESSION["id"];

$stmt = $conn->prepare("SELECT * FROM `user` WHERE `id` = '$userid'");
$stmt->execute();
$row = $stmt->fetch();

// echo ($userid);
// echo 'test';
?>



<div class="global_div">


</ul>
<h1>Hi,<?= $row["name"] ?>! </h1>
<br>Today is <?= date("Y/m/d") ?></br>

<li><a href="new_account.php" target="_blank">New Account  </a></li>
<li><a href="https://accounts.google.com" target="_blank">Email  </a></li>
<li><a>New Task  </a></li>

<p class="info">View all the accounts below!!</p>

  <?php 
  
  echo "<div class='global_div'> ";
     $stmt1->execute();
    while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        echo   "
        <div class='image image2'>
        <a href='your_account_detail.php?id=".$test["accountid"]."'>
        <img class='account_title idea_title2' src=".$test["account_pic"]. ">";
        echo   "<p class='account_discription'>".$test["name"]. " </p>
        </a>
        </div> 
        " ;
    
    }
   echo "</div>";




  

?>

</div></body> 
<?php 
include("foot.php");
?>